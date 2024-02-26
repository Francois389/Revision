<?php

namespace controllers;

use other\classes\Carte;
use services\AccueilService;
use services\NoService;
use services\Service;
use yasmf\View;

/**
 * Contrôleur responsable de la gestion de la page d'accueil.
 *
 * @author clement.denamiel
 * @author rafael.roma
 * @author lohan.vignals
 * @author antonin.veyre
 */
class HomeController implements Controller
{
    private Service $service;

    /**
     * Constructeur de la classe.
     *
     * @param NoService|Service $noService Service du HomeController.
     */
    public function __construct(Service $service)
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

        $carte = new Carte('titre', 'tag', 'description', date('d/m/Y', strtotime('+1 week')), date("d/m/Y"), 4);

        //STUMB
        $carteEcheanceCourte = array($carte, $carte, $carte, $carte, $carte);
        $carteAleatoire = array($carte, $carte, $carte, $carte, $carte);

        $view = new View('accueil');
        $view->setVar('carteEcheanceCourte', $carteEcheanceCourte);
        $view->setVar('carteAleatoire', $carteAleatoire);
        return $view;
    }
}
