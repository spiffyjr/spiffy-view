<?php

namespace Spiffy\View;

use Spiffy\Event\Manager;
use Spiffy\Event\Plugin;
use Spiffy\Mvc\MvcEvent;
use Symfony\Component\HttpFoundation\Response;

class JsonStrategy implements Plugin, ViewStrategy
{
    /**
     * {@inheritDoc}
     */
    public function plug(Manager $events)
    {
        $events->on(MvcEvent::EVENT_FINISH, [$this, 'injectResponse'], 100);
    }

    /**
     * @param MvcEvent $e
     */
    public function injectResponse(MvcEvent $e)
    {
        $model = $e->getModel();
        if (!$model instanceof JsonModel) {
            return;
        }

        $response = new Response();

        if ($model->isJonP()) {
            $response->headers->set('Content-Type', 'application/javascript');
        } else {
            $response->headers->set('Content-Type', 'application/json');
        }

        $e->setResponse($response);
    }

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
        $result = json_encode(array_merge($nameOrModel->getVariables(), $variables));

        if ($nameOrModel->isJonP()) {
            $result = sprintf('%s(%s);', $nameOrModel->getCallbackMethod(), $result);
        }

        return $result;
    }
}
