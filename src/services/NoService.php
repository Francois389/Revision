<?php

namespace services;

class NoService implements Service
{
    private \PDO $pdo;

    public function __construct()
    {
    }

    public function setPDO(\PDO $pdo): void
    {
        $this->pdo = $pdo;
    }
}
