<?php
class testSetup extends PHPUnit_Framework_TestCase{
	protected $stack;
	protected $a;
	protected $b;
	protected $expected;
	protected function setUp()
	{
		$this->stack = array();
		$this->a = 0;
		$this->b = 0;
		$this->expected = 0;
		
	}
	public function testEmpty()
	{
		$this->assertTrue(empty($this->stack));
	}
	
	public function testPush()
	{
		array_push($this->stack, 'foo');
		$this->assertEquals('foo', $this->stack[count($this->stack)-1]);
		$this->assertFalse(empty($this->stack));
	}
	
	public function testPop()
	{
		array_push($this->stack, 'foo');
		$this->assertEquals('foo', array_pop($this->stack));
		$this->assertTrue(empty($this->stack));
	}
	
	public function testAEmpty(){
		$a=0;
		$this->assertEmpty($a);
		return $a;
	}
	public function testBEmpty(){
		$b=0;
		$this->assertEmpty($b);
		return $b;
	}
	public function testCEmpty(){
		$expected =0;
		$this->assertEmpty($expected);
		return $expected;
	}
	
	/**
	 * @dataProvider additionProvider
	 */
	public function testAdd($a, $b)
	{var_dump($a);
		$this->assertEquals(3, $a + $b);
	}
	
	public function additionProvider()
	{
		return array(array(1,2,3));
	}
	
}