<?php

namespace Tests;

class ExampleTest extends \PHPUnit_Framework_TestCase
{
    public function testModelGenerate()
    {
        $modelGenerate = new \Rayjun\Curd\Generator\ModelGenerator();
        
        $modelGenerate->generate();
        
        $this->assertTrue(true);
    }
}
