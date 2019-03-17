<?php

namespace PHPitter\Controllers;

abstract class AbstractController
{
    /**
     * @var \PHPitter\Models\RequestInterface
     */
    protected $request;

    public function __construct(\PHPitter\Models\RequestInterface $request)
    {
        $this->request = $request;
    }

    public function getRequest()
    {
        return $this->request;
    }
}