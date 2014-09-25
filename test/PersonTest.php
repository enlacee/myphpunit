<?php
/**
* Class Person in test
* @author Anibal Copitan
*/
require_once 'Person.php';
class PersonTest extends PHPUnit_Framework_TestCase {
    public function testHello()
    {
        $test = new Person();
        $this->assertEquals('Hello test :!!!', $test->hello());
    }    
}
