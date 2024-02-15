<?php

namespace controllers;

use other\classes\Carte;
use PDO;
use services\NoService;
use services\Service;
use yasmf\View;
use services\AccueilService;

/**
 * Contrôleur responsable de la gestion de la page d'accueil.
 * 
 * @author clement.denamiel
 * @author rafael.roma
 * @author lohan.vignals
 * @author antonin.veyre
 */
class HomeController implements Controller{

    private NoService $NoService;

    /**
     * Constructeur de la classe.
     *
     * @param NoService|Service $noService Service du HomeController.
     */
    public function __construct(NoService|Service $noService)
    {
        $this->NoService = $noService;
    }

    /**
     * Affiche la page d'accueil avec la présentation des festivals.
     *
     * @return View Vue de la page d'accueil.
     */
    public function index(): View
    {

        $carte = new Carte('titre', 'tag', 'description',date('d/m/Y', strtotime('+1 week')) , date("d/m/Y"), 4);
        $view = new View('detailCarte');
        $view->setVar('carte', $carte);
        return $view;
    }
}
