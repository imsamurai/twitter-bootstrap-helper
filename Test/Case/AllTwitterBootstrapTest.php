<?php

/**
 * Author: imsamurai <im.samuray@gmail.com>
 * Date: Feb 6, 2014
 * Time: 7:28:08 PM
 * Format: http://book.cakephp.org/2.0/en/development/testing.html
 */

/**
 * AllTwitterBootstrapTest
 */
class AllTwitterBootstrapTest extends CakeTestCase {

	/**
	 * Suite define the tests for this suite
	 *
	 * @return void
	 */
	public static function suite() {
		$suite = new CakeTestSuite('All TwitterBootstrap Tests');

		$path = App::pluginPath('TwitterBootstrap') . 'Test' . DS . 'Case' . DS;
		$suite->addTestDirectoryRecursive($path);
		return $suite;
	}
}