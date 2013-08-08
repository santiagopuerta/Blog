<?php

class AccountsControllerTest extends TestCase {

  public function testLogin(){
    // Para monitorizar la vista.
    $this->registerNestedView('login');
    $this->call('GET','accounts/login');
    // Para comprobar la vista.
    $this->assertNestedView('login');
  }
    

}