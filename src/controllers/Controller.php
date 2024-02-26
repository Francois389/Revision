<?php

namespace controllers;

use services\Service;
use yasmf\View;

interface Controller
{
    public function __construct(Service $service);

    public function index(): View;
}
