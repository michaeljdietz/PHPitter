<?php

namespace PHPitter\Models;

class Response implements ResponseInterface
{
    /**
     * @var string
     */
    protected $html;

    public function __construct($html = null)
    {
        $this->html = $html;
    }

    public function __toString()
    {
        return $this->html;
    }
}