<?php
App::uses('Area', 'Model');

/**
 * Area Test Case
 *
 */
class AreaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.area',
		'app.question',
		'app.request',
		'app.user',
		'app.group',
		'app.answer',
		'app.photo',
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
		$this->Area = ClassRegistry::init('Area');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Area);

		parent::tearDown();
	}

}
