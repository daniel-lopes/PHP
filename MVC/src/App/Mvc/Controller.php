<?php
namespace App\Mvc;

class Controller {
	public function index(){
		$Model = new Model;
		$View = new View;
		$View->render($Model->texto());
	}
}


