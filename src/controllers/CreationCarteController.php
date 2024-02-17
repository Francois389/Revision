<?php

namespace controllers;

use controllers\Controller;
use services\Service;
use yasmf\View;

class CreationCarteController implements Controller
{
    private Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index(): View
    {
        // TODO: Implement index() method.
        $view = new View("creationCarte");
        return $view;
    }
}