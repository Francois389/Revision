<?php
/*
 * yasmf - Yet Another Simple MVC Framework (For PHP)
 *     Copyright (C) 2023   Franck SILVESTRE
 *
 *     This program is free software: you can redistribute it and/or modify
 *     it under the terms of the GNU Affero General Public License as published
 *     by the Free Software Foundation, either version 3 of the License, or
 *     (at your option) any later version.
 *
 *     This program is distributed in the hope that it will be useful,
 *     but WITHOUT ANY WARRANTY; without even the implied warranty of
 *     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *     GNU Affero General Public License for more details.
 *
 *     You should have received a copy of the GNU Affero General Public License
 *     along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace application;

use controllers\CreationCarteController;
use controllers\HomeController;

use services\CreationCarteService;
use services\HomeService;
use services\NoService;
use services\Service;
use yasmf\ComponentFactory;
use yasmf\DataSource;
use yasmf\NoControllerAvailableForNameException;
use yasmf\NoServiceAvailableForNameException;

/**
 *  The controller factory
 */
class DefaultComponentFactory implements ComponentFactory
{
    /**
     * @param string $controller_name the name of the controller to instanciate
     * @return mixed the controller
     * @throws NoControllerAvailableForNameException when controller is not found
     * @throws NoServiceAvailableForNameException when service is not found
     */
    public function buildControllerByName(string $controller_name, DataSource $dataSource): mixed
    {
        return match ($controller_name) {
            "Home" => $this->buildHomeController($dataSource),
            "CreationCarte" => $this->buildCreationCarteController($dataSource),
            default => throw new NoControllerAvailableForNameException($controller_name)
        };
    }

    /**
     * @param string $service_name the name of the service
     * @return mixed the created service
     * @throws NoServiceAvailableForNameException when service is not found
     */
    public function buildServiceByName(string $service_name): Service
    {
        return match ($service_name) {
            "NoService" => new NoService(),
            "CreationCarte" => new CreationCarteService(),
            "Home" => new HomeService(),
            default => throw new NoServiceAvailableForNameException($service_name)
        };
    }


    private function buildHomeController(DataSource $dataSource): HomeController {
        return new HomeController($this->buildServiceByName("Home"), $dataSource);
    }

    private function buildCreationCarteController(DataSource $dataSource): CreationCarteController {
        return new CreationCarteController($this->buildServiceByName("CreationCarte"), $dataSource);
    }

}
