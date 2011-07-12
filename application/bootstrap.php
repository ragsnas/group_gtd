<?php

/**
 * This is where the bootstrapping will go
 */

if(!defined('APPLICATION_ENV')) {
	define('APPLICATION_ENV','production');
}
if(!defined('APPLICATION_PATH')) {
	define('APPLICATION_PATH',realpath(dirname(__FILE__)));
}
