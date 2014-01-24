<?php

namespace BorderForce\Drt\EntityBundle\Security\User;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\InMemoryUserProvider;

class BasicUserProvider extends InMemoryUserProvider {
    
    /**
     * {@inheritDoc}
     */
    public function supportsClass($class) {
        return $class === 'BorderForce\Drt\EntityBundle\Security\User\User';
    }
}

