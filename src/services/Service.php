<?php

namespace services;

interface Service
{

    public function __construct();

    public function setPDO(\PDO $pdo): void;
}