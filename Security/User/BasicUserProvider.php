<?php

namespace BorderForce\Drt\EntityBundle\Security\User;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\InMemoryUserProvider;

class BasicUserProvider implements UserProviderInterface {
  
  /**
   * @var SessionInterface
   */
  private $session;
  
  protected $users;
  
  protected $userDetails;
  
  /**
   * @var Client
   */
  private $apiClient;

  
  public function __construct(\Guzzle\Service\Client $apiClient, \Symfony\Component\HttpFoundation\Session\SessionInterface $session,  array $userDetails = array()) {
    
    $this->apiClient   = $apiClient;
    $this->session     = $session;
    $this->userDetails = $userDetails;
    
//    foreach ($users as $username => $attributes) {
//      $password = isset($attributes['password']) ? $attributes['password'] : null;
//      $enabled = isset($attributes['enabled']) ? $attributes['enabled'] : true;
//      $name     = isset($attributes['name']) ? $attributes['name'] : null;
//      $roles = isset($attributes['roles']) ? $attributes['roles'] : array();
//      $user = new BasicUser($username, $password, $name, $roles, $enabled, true, true, true);
////var_dump($user);
//      $this->createUser($user);
//    }
  }
  
  public function createUser($username, array $userDetails) {
      if (isset($this->users[strtolower($username)])) {
          throw new \LogicException('Another user with the same username already exists.');
      }

//      // Retrieve this user's port
//      $portCommand  = $this->apiClient->getCommand('GetPortByName', array('name' => $userDetails['port']));
//      $port         = $portCommand->execute();
//      $portResponse = $port->getResponse();
//      if (!is_object($port)) {
//        
//      }
      
      $user = new BasicUser(
        $username,
        $userDetails['password'],
        $userDetails['name'],
        $userDetails['roles'],
        true,
        true,
        true,
        true
      );
      
      return $user;
  }
  
  /**
    * {@inheritdoc}
    */
   public function loadUserByUsername($username)
   {
      if (!isset($this->userDetails[strtolower($username)])) {
          $ex = new UsernameNotFoundException(sprintf('Username "%s" does not exist.', $username));
          $ex->setUsername($username);

          throw $ex;
      }

//      $user = $this->users[strtolower($username)];

      $user = $this->createUser($username, $this->userDetails[strtolower($username)]);
      
      return new BasicUser($user->getUsername(), $user->getPassword(), $user->getName(), $user->getRoles(), $user->isEnabled(), $user->isAccountNonExpired(),
              $user->isCredentialsNonExpired(), $user->isAccountNonLocked());
   }
   
   /**
     * {@inheritDoc}
     */
    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }

        return $this->loadUserByUsername($user->getUsername());
    }
  
  /**
   * {@inheritDoc}
   */
  public function supportsClass($class) {
      return $class === 'BorderForce\Drt\EntityBundle\Security\User\BasicUser';
  }
}

