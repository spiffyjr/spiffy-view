<?php

namespace Spiffy\View;

final class JsonModel implements Model
{
    use ModelTrait;

    /**
     * @var string|null
     */
    private $callbackMethod;

    /**
     * @return bool
     */
    public function isJsonP()
    {
        return null !== $this->callbackMethod;
    }

    /**
     * @return null|string
     */
    public function getCallbackMethod()
    {
        return $this->callbackMethod;
    }

    /**
     * @param null|string $callbackMethod
     */
    final public function setCallbackMethod($callbackMethod)
    {
        $this->callbackMethod = $callbackMethod;
    }
}
