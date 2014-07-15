<?php
 
namespace Spiffy\View;

/**
 * @coversDefaultClass \Spiffy\View\JsonModel
 */
class JsonModelTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers ::isJsonP, ::setCallbackMethod, ::getCallbackMethod
     */
    public function testIsJsonP()
    {
        $m = new JsonModel();
        $this->assertFalse($m->isJsonP());
        
        $m->setCallbackMethod('foo');
        
        $this->assertTrue($m->isJsonP());
        $this->assertSame('foo', $m->getCallbackMethod());
    }
}