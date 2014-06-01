<?php

namespace Spiffy\View;

interface ViewRenderer
{
    /**
     * @return mixed
     */
    public function getEngine();

    /**
     * @param string|ViewModel $nameOrModel
     * @param null|array $variables
     * @return string
     */
    public function render($nameOrModel, array $variables = []);
}
