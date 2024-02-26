<?php

namespace controllers;

use services\Service;
use yasmf\DataSource;
use yasmf\View;

interface Controller
{
    /**
     * Constructeur de la classe.
     * @param Service $service
     * @param DataSource $dataSource
     */
    public function __construct(Service $service, DataSource $dataSource);

    /**
     * Méthode principale de la page du contrôleur.
     * @return View Vue de la page
     */
    public function index(): View;
}
