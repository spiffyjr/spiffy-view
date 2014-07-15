<?php

namespace Spiffy\View;

/**
 * @coversDefaultClass \Spiffy\View\JsonStrategy
 */
class JsonStrategyTest extends \PHPUnit_Framework_TestCase 
{
    /**
     * @covers ::canRender
     */
    public function testCanRender()
    {
        $s = new JsonStrategy();
        $this->assertFalse($s->canRender('foo'));
        $this->assertFalse($s->canRender(null));
        $this->assertTrue($s->canRender(new JsonModel()));
    }

    /**
     * @covers ::render
     */
    public function testRenderWithJsonP()
    {
        $s = new JsonStrategy();
        $m = new JsonModel(['foo' => 'bar']);
        $m->setCallbackMethod('foo');
        
        $this->assertSame('foo(' . json_encode(['foo' => 'bar']) . ');', $s->render($m));
    }

    /**
     * @covers ::render
     */
    public function testRender()
    {
        $s = new JsonStrategy();
        $m = new JsonModel(['foo' => 'bar']);

        $this->assertSame(json_encode(['foo' => 'bar']), $s->render($m));
    }

    /**
     * @covers ::render
     */
    public function testRenderWithoutJsonModel()
    {
        $s = new JsonStrategy();
        $this->assertSame(json_encode(['foo' => 'bar']), $s->render(null, ['foo' => 'bar']));
    }
}
 