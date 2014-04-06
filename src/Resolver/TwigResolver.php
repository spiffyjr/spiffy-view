<?php

namespace Spiffy\View\Resolver;

use Spiffy\View\Model\Model;

class TwigResolver implements Resolver
{
    /**
     * @var \Twig_Environment
     */
    protected $twig;

    /**
     * @var string
     */
    protected $suffix;

    /**
     * @param \Twig_Environment $twig
     * @param string $suffix
     */
    public function __construct(\Twig_Environment $twig, $suffix = '.twig')
    {
        $this->twig = $twig;
        $this->suffix = $suffix;
    }

    /**
     * {@inheritDoc}
     */
    public function resolve($nameOrModel)
    {
        if ($nameOrModel instanceof Model) {
            $nameOrModel = $nameOrModel->getTemplate();
        }
        return $this->twig->loadTemplate($nameOrModel . $this->suffix);
    }
}
