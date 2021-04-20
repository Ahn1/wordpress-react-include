<?php

namespace WpReact\shared;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFilter;

class TwigEnv
{

	public static function GetEnvironment(): Environment
	{
		$loader = new FilesystemLoader(__DIR__ . "/../");
		$twig = new Environment($loader, [
			// 'cache' => __DIR__ . '/_cache/123',
		]);

		$twig->addFilter(new TwigFilter("hiddenParamEcho", [Forms::class, "HiddenParamEcho"], ['is_safe' => ['html']]));

		return $twig;
	}
}