<?php

// basic defs for ROOT, DS and CONF
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__FILE__));
define("CONF",ROOT.DS."configs".DS."def.php");

// including conf and app and other basics
include_once(CONF);
include_once APP;




?>