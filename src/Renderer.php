<?php

namespace Spiffy\View;

interface Renderer
{
    /**
     * @return mixed
     */
    public function getEngine();

    /**
     * @param $nameOrModel
     * @param null|array $variables
     * @return string
     */
    public function render($nameOrModel, array $variables = []);
}
