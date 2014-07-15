<?php

namespace Spiffy\View;

/**
 * @coversDefaultClass \Spiffy\View\VardumpStrategy
 */
class VardumpStrategyTest extends \PHPUnit_Framework_TestCase 
{
    /**
     * @covers ::canRender
     */
    public function testCanRenderAlwaysReturnsTrue()
    {
        $s = new VardumpStrategy();
        $this->assertTrue($s->canRender('string'));
        $this->assertTrue($s->canRender(false));
        $this->assertTrue($s->canRender(null));
    }

    /**
     * @covers ::render
     */
    public function testRender()
    {
        $s = new VardumpStrategy();
        
        ob_start();
        $s->render('string');
        $result = ob_get_flush();
        
        $this->assertSame('string(6) "string"', trim($result));
    }
}
 