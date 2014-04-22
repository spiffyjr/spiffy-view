<?php

namespace Spiffy\View;

interface Resolver
{
    /**
     * @param Model|string $nameOrModel
     * @return bool
     */
    public function resolve($nameOrModel);
}
