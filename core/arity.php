<?php
/**
 * Arity
 *
 * ORM Framework for PHP 5.2 or newer
 *
 * Licensed under GPL
 * 
 *
 * @package		Arity
 * @author		codendev
 * @copyright  Copyright (c) 2011 - 2012, CodenDev.
 * @license		http://gnu.org/licenses/gpl.txt
 * @link		   http://www.codendev.com
 * @since		Version 1.0
 * @filesource
 */
class Arity {

	/**
	 * Access provider methods
	 *
	 */
	public static function provider($type) {

		if(empty($type)) {

			return  DEFAULT_PROVIDER::getProvider();

		}
		else {

			return  $type::getProvider();
		}

	}
	/**
	 * Adds object to Arity Context
	 *
	 */
	public static function addObject($object, $type=DEFAULT_PROVIDER) {

		$db=$type::getProvider($type);

		return new Entity($object,$db);

	}

}
