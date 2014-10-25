<?php
class dbTest extends PHPUnit_Extensions_Database_TestCase
{
	public function testManualDataSetAssertion()
	{
		$dataSet = new PHPUnit_Extensions_Database_DataSet_QueryDataSet();
		$dataSet->addTable('guestbook', 'SELECT id, content, user FROM guestbook'); // 外加的表
		//$expectedDataSet = $this->createFlatXmlDataSet('guestbook.xml');

		//$this->assertDataSetsEqual($expectedDataSet, $dataSet);
	}
}