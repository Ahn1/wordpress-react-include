<?php

namespace WpReact\admin\SettingsPage;

use WpReact\shared\TwigEnv;

class SettingsPage
{

	public static function Run()
	{
		echo TwigEnv::GetEnvironment()->render('admin/settings/Settings.twig',
			[
				'name' => 'Fabien',
				"users" => []
			]);
	}


	public static function RegisterMenu()
	{
		add_menu_page('React Apps',
			'React Apps',
			'manage_options',
			'wp_react_settings',
			[self::class, "Run"]);

	}
}