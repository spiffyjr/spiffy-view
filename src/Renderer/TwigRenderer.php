<?php

namespace Spiffy\View\Renderer;

use Spiffy\View\Model\ViewModel;
use Spiffy\View\Resolver\Resolver;
use Spiffy\View\Resolver\TwigResolver;

class TwigRenderer implements Renderer
{
    /**
     * @var TwigResolver
     */
    protected $resolver;

    /**
     * @var \Twig_Environment
     */
    protected $twig;

    /**
     * @param \Twig_Environment $twig
     */
    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * {@inheritDoc}
     */
    public function getEngine()
    {
        return $this->twig;
    }

    /**
     * {@inheritDoc}
     */
    public function setResolver(Resolver $resolver)
    {
        $this->resolver = $resolver;
    }

    /**
     * {@inheritDoc}
     */
    public function render($nameOrModel, array $variables = [])
    {
        if (!$nameOrModel instanceof ViewModel) {
            $model = new ViewModel();
            $model->setVariables($variables);
            $model->setTemplate($nameOrModel);

            $nameOrModel = $model;
        }
        $template = $this->resolver->resolve($nameOrModel);

        return $template->render($nameOrModel->getVariables());
    }
}
