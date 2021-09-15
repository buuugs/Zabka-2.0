<?php

include 'application/require.php';
require_once 'application/controller/user.php';

Session::init();

if (!Session::isLogged()) { Util::redirect('login'); }

$user = new UserController;
$user->logoutUser();

Util::redirect('login');
?>