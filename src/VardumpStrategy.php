<?php

namespace Spiffy\View;

class VardumpStrategy implements ViewStrategy
{
    /**
     * {@inheritDoc}
     */
    public function canRender($nameOrModel)
    {
        return true;
    }

    /**
     * @param Model|string $nameOrModel
     * @param array $variables
     * @return string
     */
    public function render($nameOrModel, array $variables = [])
    {
        var_dump($nameOrModel);
    }
}
