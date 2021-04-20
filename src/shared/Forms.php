<?php

namespace WpReact\shared;

class Forms {

	public static function HiddenParamEcho($name) {
		$value = $_REQUEST[$name];
		return "<input type='hidden' name='$name' value='$value' />";
	}

}