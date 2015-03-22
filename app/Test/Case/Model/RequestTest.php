<?php
App::uses('Request', 'Model');

/**
 * Request Test Case
 *
 */
class RequestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.request',
		'app.area',
		'app.question',
		'app.user',
		'app.group',
		'app.answer',
		'app.photo',
		'app.areas_user',
		'app.requests_user',
		'app.tag',
		'app.tags_user',
		'app.questions_tag'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Request = ClassRegistry::init('Request');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Request);

		parent::tearDown();
	}

}
