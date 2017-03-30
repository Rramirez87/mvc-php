<?php

class UsuariosModel extends Model {

	function __construct() {
		parent::__construct();
	}

    public function login ($valores){

        $tabla    =  "";
        $where    =  "";
        $sanear   = true;
        $respuesta = $this->db->insert( $tabla, $valores, $where,$sanear);

        return $respuesta;

    }

}

?>
