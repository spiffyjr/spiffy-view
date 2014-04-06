<?php

namespace Spiffy\View;

interface Model
{
    /**
     * @param array $options
     * @return void
     */
    public function setOptions(array $options);

    /**
     * @return array
     */
    public function getOptions();

    /**
     * @param array $variables
     */
    public function setVariables(array $variables);

    /**
     * @return array
     */
    public function getVariables();

    /**
     * @param string $template
     */
    public function setTemplate($template);

    /**
     * @return string
     */
    public function getTemplate();
}
