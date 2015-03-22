<?php
/**
 * RequestFixture
 *
 */
class RequestFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'area_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true),
		'subject' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'comment' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'lowerdate' => array('type' => 'date', 'null' => true, 'default' => null),
		'upperdate' => array('type' => 'date', 'null' => true, 'default' => null),
		'accepted' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'area_id' => 1,
			'subject' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'lowerdate' => '2015-03-22',
			'upperdate' => '2015-03-22',
			'accepted' => 1,
			'created' => '2015-03-22 00:09:17',
			'modified' => '2015-03-22 00:09:17'
		),
	);

}
