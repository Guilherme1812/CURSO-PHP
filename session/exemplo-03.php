<?php

//para recuperar uma session:
session_id('9bp8990p828acfigbes0jn8v02');

require_once ("config.php");
session_regenerate_id();
echo session_id();

var_dump($_SESSION);

?>