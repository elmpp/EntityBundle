<?php

namespace BorderForce\Drt\EntityBundle\EventListener;
  
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class BasicUserListener {
  
  /**
   * @var Symfony\Component\HttpFoundation\Session\SessionInterface
   */
  protected $session;
  
  protected $securityContext;
  
  /**
   * @var Symfony\Component\Security\Core\User\UserProviderInterface
   */
  protected $userProvider;
  
  public function __construct(SessionInterface $session, UserProviderInterface $userProvider, SecurityContextInterface $securityContext) {
    $this->session      = $session;
    $this->userProvider = $userProvider;
    $this->securityContext = $securityContext;
  }
  
  public function onKernelController(FilterControllerEvent $event)
  {
    if ($this->session->has('drt.user')) {
      
    }

    $user = $this->userProvider->loadUserByUsername('user');
    $securityToken = new UsernamePasswordToken($user, null, 'dev', $user->getRoles());
    $this->securityContext->setToken($securityToken);
  }
  
}

