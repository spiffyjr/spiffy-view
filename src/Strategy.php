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
     * @return string
     */
    public function render($nameOrModel);
}
