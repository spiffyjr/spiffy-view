<?php

namespace Spiffy\View\Renderer;

use Spiffy\View\Resolver\Resolver;

interface Renderer
{
    /**
     * @return mixed
     */
    public function getEngine();

    /**
     * @param Resolver $resolver
     * @return void
     */
    public function setResolver(Resolver $resolver);

    /**
     * @param $nameOrModel
     * @param null|array $variables
     * @return string
     */
    public function render($nameOrModel, array $variables = []);
}
