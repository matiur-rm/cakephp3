<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         3.0.0
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
namespace Cake\Test\TestCase\Database\Log;

use Cake\Database\Log\LoggedQuery;

/**
 * Tests LoggedQuery class
 *
 **/
class LoggedQueryTest extends \Cake\TestSuite\TestCase {

/**
 * Tests that LoggedQuery can be converted to string
 *
 * @return void
 */
	public function testStringConversion() {
		$logged = new LoggedQuery;
		$logged->query = 'SELECT foo FROM bar';
		$this->assertEquals('SELECT foo FROM bar', (string)$logged);
	}

}
