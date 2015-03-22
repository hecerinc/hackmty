<?php
App::uses('Photo', 'Model');

/**
 * Photo Test Case
 *
 */
class PhotoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.photo',
		'app.user',
		'app.group',
		'app.answer',
		'app.question',
		'app.area',
		'app.request',
		'app.areas_user',
		'app.requests_user',
		'app.tag',
		'app.tags_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Photo = ClassRegistry::init('Photo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Photo);

		parent::tearDown();
	}

}
