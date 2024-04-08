<?php

class Logout {
	public function doLogout(){
		session_start();
		session_destroy();
		header('location: '. base_url . '/login/index');
	}
}
