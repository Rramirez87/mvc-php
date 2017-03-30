<?php

class Error extends Controller {

	function __construct() {

		parent::__construct();

	}

	public function index() {

		require "./views/includes/cabezera.php";

		require "./views/includes/nav.php";

		$this->view->render($this, 'error');

		require "./views/includes/footer.php";

	}
        
}

?>