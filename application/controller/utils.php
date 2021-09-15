<?php


class Util extends Controller
{

	public static function redirect($location) {

		header("location:". SUB_DIR.$location);
		exit;

	}


	public static function head($title) {

		include(SITE_ROOT . '/includes/head.inc.php');

	}


	public static function navbar() {

		include(SITE_ROOT . '/includes/navbar.inc.php');

	}


	public static function adminNavbar() {

		include(SITE_ROOT . '/admin/includes/adminNavbar.inc.php');

	}


	public static function footer() {

		include(SITE_ROOT . '/includes/footer.inc.php');

	}


	public static function display($string) {

		echo htmlspecialchars($string);

	}
	
	public static function adminCheck() {

		if (!Session::isAdmin()) {

			Util::redirect('dashboard/index/');

		}

	}
	
}