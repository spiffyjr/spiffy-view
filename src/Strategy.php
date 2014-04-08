<?php

namespace Spiffy\View;

interface Strategy
{
    /**
     * @param string $nameOrModel
     * @return bool
     */
    public function canRender($nameOrModel);

    /**
     * @param string $nameOrModel
     * @param array $variables
     * @return string
     */
    public function render($nameOrModel, array $variables = []);
}
