<?php

class AccountsController extends BaseController {
 
  // Devuelve la pagina login
  public function login() {
    return $this->buildBase()->nest('view', 'login');
  }

  
}