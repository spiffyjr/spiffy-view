<?php

namespace Spiffy\View\Resolver;

interface Resolver
{
    /**
     * @param \Spiffy\View\model\Model|string $nameOrModel
     * @return bool
     */
    public function resolve($nameOrModel);
}
