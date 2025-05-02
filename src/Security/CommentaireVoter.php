<?php

namespace App\Security\Voter;

use App\Entity\Commentaire;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class CommentaireVoter extends Voter
{
    const EDIT = 'EDIT';
    const DELETE = 'DELETE';

    protected function supports(string $attribute, $subject): bool
    {
        return in_array($attribute, [self::EDIT, self::DELETE]) 
            && $subject instanceof Commentaire;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        
        // Si l'utilisateur n'est pas connecté
        if (!$user instanceof User) {
            return false;
        }

        /** @var Commentaire $commentaire */
        $commentaire = $subject;

        // Récupère l'auteur du commentaire
        $auteur = $commentaire->getPersonne();

        // Si le commentaire n'a pas d'auteur
        if (!$auteur instanceof User) {
            return false;
        }

        switch ($attribute) {
            case self::EDIT:
            case self::DELETE:
                // Compare les ID des utilisateurs pour plus de fiabilité
                return $user->getId() === $auteur->getId();
        }

        return false;
    }
}