<?php

namespace Spiffy\View\Model;

class ViewModel implements Model
{
    use ModelTrait;

    /**
     * @param array $vars
     */
    public function __construct(array $vars = [])
    {
        $this->setVariables($vars);
    }
}
