<?php

class AccountsController extends BaseController {
 
  public function login() {
    return $this->buildBase()->nest('view', 'login');
  }
 
}