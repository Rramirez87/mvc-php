<?php

define ('URL',  $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].substr($_SERVER['SCRIPT_NAME'],0,-9));
define ('LIBS', './libs/');
define ('MODELS', './models/');

?>
