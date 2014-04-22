<?php

namespace Spiffy\View;

interface Strategy
{
    /**
     * @param Model|string $nameOrModel
     * @return bool
     */
    public function canRender($nameOrModel);

    /**
     * @param Model|string $nameOrModel
     * @param array $variables
     * @return string
     */
    public function render($nameOrModel, array $variables = []);
}
