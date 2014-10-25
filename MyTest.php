<?php
class MyTest extends PHPUnit_Framework_TestCase {
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
     * @depends testAEmpty
     * @depends testBEmpty
     * @depends testCEmpty
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b)
    {
    	$this->assertEquals(3, $a + $b);
    }
    
    public function additionProvider()
    {
    	return array(array(1,2,3));
    }

    public function testExpect(){
    	print 'fpp';
    	$this->expectOutputString('fpp');
    }
    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Right Message
     */
    public function testExceptionHasRightMessage()
    {
    	throw new InvalidArgumentException('Right Message', 12);
    }
    
    
   
    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testError(){
    	
    	include 'test.php';
    }
    
    
}