<?php

namespace PHPitter\Controllers;

class FrontController extends AbstractController implements ControllerInterface
{
    /**
     * @throws \Exception
     */
    public function match()
    {
        $class = $this->getRequest()->getController()."Controller";
        if (!class_exists($class)) {
            throw new \Exception("Class $class does not exist");
        }

        $controller = new ($this->getRequest()->getController());
        $action = $this->getRequest()->getAction();

        if (!method_exists($controller, $action)) {
            throw new \Exception("Method $action in class $controller does not exist");
        }

        return call_user_func_array([$controller, $action], $this->getRequest()->getParams());
    }
}