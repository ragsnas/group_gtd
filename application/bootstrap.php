<?php

/**
 * A class to hold all the Bootstrapping that is necessary.
 * Initialiszation of serveral parts such as database, views
 * and cache is seperated to allow direct bootstrapping of
 * certain things 
 * 
 * @author ragsnas
 */
class Bootstrap
{
	public static function init() {
		$bootstrap = new self();
		$bootstrap->_initVariables();
	}
	
	public function _initVariables()
	{
		if(!defined('APPLICATION_ENV')) {
			define('APPLICATION_ENV','production');
		}
		if(!defined('APPLICATION_PATH')) {
			define('APPLICATION_PATH',realpath(dirname(__FILE__)));
		}		
	}
}

