<?php

class array_insert_Test extends PHPUnit_TestCase {
	//
    function test_array_insert() {
		$stack = array();

        $this->assertEquals(0, count($stack));

		array_insert($stack, 0, 'one');
		array_insert($stack, 5, 'two');
		$this->assertEquals(2, count($stack));

		array_insert($stack, 0, 'foo');
		$this->assertEquals('foo', $stack[0]);
		$this->assertEquals(3, count($stack));

		array_insert($stack, 'two', 'three');
		$this->assertEquals('three', $stack['two']);
    }
}





?>
