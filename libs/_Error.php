<?php

class _Error extends Controller{

  function __construct() {

		parent::__construct();

	}

  public function error($informacion = null) {

    $this->view->render('Includ','header');
		$this->view->render('Error','error', $informacion);
    $this->view->render('Includ','footer');

	}

}

?>
