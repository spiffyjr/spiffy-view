<?php

namespace Spiffy\View;

interface Resolver
{
    /**
     * @param \Spiffy\View\Model|string $nameOrModel
     * @return bool
     */
    public function resolve($nameOrModel);
}
