<?php

namespace WpReact\admin;

use WpReact\admin\SettingsPage\SettingsPage;

class Admin {
	public static function Register() {

		add_action('admin_menu', function () {
			SettingsPage::RegisterMenu();
		});


	}
}