<?php

namespace BorderForce\Drt\EntityBundle\Util;

class Util {
  
  public static function getClassNameFromFCQN($fcqn) {
    preg_match('|^.*\/(\s)*$|', $fcqn, $matches);
    if (count($matches)) {
      return $matches[1];
    }
    return $fcqn;
  }
}