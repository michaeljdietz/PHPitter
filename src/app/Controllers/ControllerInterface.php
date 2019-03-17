<?php

namespace PHPitter\Controllers;

interface ControllerInterface
{
    /**
     * @return \PHPitter\Models\RequestInterface
     */
    public function getRequest();
}