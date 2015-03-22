<?php
App::uses('Question', 'Model');

/**
 * Question Test Case
 *
 */
class QuestionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.question',
		'app.area',
		'app.request',
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
		$this->Question = ClassRegistry::init('Question');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Question);

		parent::tearDown();
	}

}
