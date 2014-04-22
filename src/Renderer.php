<?php

namespace Spiffy\View;

interface Renderer
{
    /**
     * @return mixed
     */
    public function getEngine();

    /**
     * @param string|Model $nameOrModel
     * @param null|array $variables
     * @return string
     */
    public function render($nameOrModel, array $variables = []);
}
