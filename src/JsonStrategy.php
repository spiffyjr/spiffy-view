<?php

namespace Spiffy\View;

class JsonStrategy implements ViewStrategy
{
    /**
     * {@inheritDoc}
     */
    public function canRender($nameOrModel)
    {
        return $nameOrModel instanceof JsonModel;
    }

    /**
     * @param JsonModel|string $nameOrModel
     * @param array $variables
     * @return string
     */
    public function render($nameOrModel, array $variables = [])
    {
        $isJsonP = false;
        if ($nameOrModel instanceof JsonModel) {
            $variables = array_merge($variables, $nameOrModel->getVariables());
            $isJsonP = $nameOrModel->isJsonP();
        }

        $result = json_encode($variables);

        if ($isJsonP) {
            $result = sprintf('%s(%s);', $nameOrModel->getCallbackMethod(), $result);
        }

        return $result;
    }
}
