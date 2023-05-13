<?php
/**
 * This plugin allows you to get a simple idea of how to
 * make a plugin. This plugin is not very useful by itself,
 * but I hope you may learn and get creative.
 * 
 * LICENSE: GPL-3.0 or later
 * AUTHOR: Valware (http://www.github.com/ValwareIRC)
 * COPYRIGHT 2023
 */


class example_plugin
{
	public $name = "Example plugin";
	public $author = "Valware";
	public $version = "1.0";
	public $description = "An example plugin to show how to make stuff";
	public $email = "v.a.pond@outlook.com";

	function __construct()
	{
		Hook::func(HOOKTYPE_NAVBAR, 'example_plugin::add_navbar'); 
	}

	public static function add_navbar(&$pages)
	{
		$page_name = "Example";
		$page_link = "plugins/example_plugin/example.php";
		$pages[$page_name] = $page_link;
	}
}