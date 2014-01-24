<?php

namespace BorderForce\Drt\EntityBundle\Security\User;

use Symfony\Component\Security\Core\User\User;

class BasicUser extends User {
  
  private $name;
  
  public function __construct($username, $password, array $roles = array(), $enabled = true, $userNonExpired = true, $credentialsNonExpired = true, $userNonLocked = true) {
    parent::__construct($username, $password, $roles, $enabled, $userNonExpired, $credentialsNonExpired, $userNonLocked);
    $this->name = 'theodore "trousered" thunderpockets';
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function setName($name) {
    $this->name = $name;
  }
  
}
