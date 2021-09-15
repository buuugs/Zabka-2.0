<?php

ini_set('session.use_strict_mode', 1);
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 0);
ini_set('session.cookie_samesite', 'Lax');
ini_set('session.cookie_lifetime', 0);

require_once 'config/config2.php';
require_once 'controller/session.php';
require_once 'controller/utils.php';
