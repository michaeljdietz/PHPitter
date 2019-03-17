<?php

namespace PHPitter\Models;

interface RequestInterface
{
    /**
     * @return string[]
     */
    public function getParams();

    /**
     * @param $key
     * @return string
     */
    public function getParam($key);

    /**
     * @return string
     */
    public function getAbsoluteUrl();

    /**
     * @return string
     */
    public function getRelativeUrl();

    /**
     * @return string
     */
    public function getController();

    /**
     * @return string
     */
    public function getAction();
}