<?php

namespace PHPitter\Models;

class Request implements RequestInterface
{
    /**
     * @var string
     */
    protected $absoluteUrl;

    /**
     * @var string
     */
    protected $scheme;

    /**
     * @var string
     */
    protected $port;

    /**
     * @var string
     */
    protected $host;

    /**
     * @var string
     */
    protected $relativeUrl;

    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $queryString;

    /**
     * @var string[]
     */
    protected $params;

    /**
     * @var string
     */
    protected $controller;

    /**
     * @var string
     */
    protected $action;

    /**
     * Request constructor.
     * @param string $url
     */
    public function __construct($url = null)
    {
        if (is_null($url)) {
            $url = $_SERVER['REQUEST_URI'];
        }

        $this->absoluteUrl = $url;
        $this->init();
    }

    protected function init()
    {
        $urlParts = parse_url($this->absoluteUrl);

        $this->scheme = isset($urlParts['scheme']) ? $urlParts['scheme'] : '';
        $this->host = isset($urlParts['host']) ? $urlParts['host'] : '';
        $this->path = isset($urlParts['path']) ? $urlParts['path'] : '';
        $this->queryString = isset($urlParts['query']) ? $urlParts['query'] : '';
        $this->relativeUrl = $this->path;

        if (!empty($this->queryString)) {
            $this->relativeUrl .= "?" . $this->queryString;
        }

        $urlParts['path'] = trim($urlParts['path'], '/');
        list($this->controller, $this->action, $paramPart) = explode('/', $urlParts['path'], 3);
        $this->controller = ucfirst($this->controller);

        if (is_null($this->action)) {
            $this->action = 'index';
        }

        $keyValues = explode('/', $paramPart);
        array_unshift($keyValues, null);
        reset($keyValues);
        $this->params = [];

        while ($key = next($keyValues) && $value = next($keyValues)) {
            $this->params[$key] = $value;
        }

        $keyValues = explode('&', $urlParts['query']);

        foreach ($keyValues as $keyValue) {
            list($key, $value) = explode("=", $keyValue);
            $this->params[$key] = $value;
        }
    }

    /**
     * @return string[]
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param string $key
     * @return string
     */
    public function getParam($key)
    {
        return isset($this->params[$key]) ? $this->params[$key] : null;
    }

    /**
     *
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     *
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return string
     */
    public function getAbsoluteUrl()
    {
        return $this->absoluteUrl;
    }

    public function getRelativeUrl()
    {
        return $this->relativeUrl;
    }
}