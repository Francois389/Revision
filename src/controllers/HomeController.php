<?php

namespace controllers;

use other\classes\Carte;
use services\NoService;
use services\Service;
use yasmf\DataSource;
use yasmf\View;

/**
 * Contrôleur responsable de la gestion de la page d'accueil.
 *
 * @author François de Saint Palais
 */
class HomeController implements Controller
{

    private Service $service;

    /**
     * Constructeur de la classe.
     *
     * @param Service $service
     * @param DataSource $dataSource
     */
    public function __construct(Service $service, DataSource $dataSource)
    {
        $this->service = $service;
    }

    /**
     * Affiche la page d'accueil avec la présentation des festivals.
     *
     * @return View Vue de la page d'accueil.
     */
    public function index(): View
    {

        $this->service->setPDO();

        $carteEcheanceCourte = $this->service->getCarteEcheanceCourte(20);
        $carteAleatoire = $this->service->getCarteAleatoire(20);

        $view = new View('accueil');
        $view->setVar('carteEcheanceCourte', $carteEcheanceCourte);
        $view->setVar('carteAleatoire', $carteAleatoire);
        return $view;
    }
}
