<?php

class HomeController extends BaseController {
 
	public function index() {
    return $this->buildBase()->nest('view', 'home');
	}
 
}