<?php

namespace Spiffy\View;

interface ViewResolver
{
    /**
     * @param ViewModel|string $nameOrModel
     * @return bool
     */
    public function resolve($nameOrModel);
}
