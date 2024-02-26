<?php

namespace other\classes;

use classe\Exception;

class Carte
{
    /**
     * @var string
     */
    private $titre;
    /**
     * @var string
     */
    private $tag;
    /**
     * @var string
     */
    private $description;
    /**
     * @var mixed
     */
    private $echeance;
    /**
     * @var mixed
     */
    private $dateCreation;
    /**
     * @var int
     */
    private $importance;

    /**
     * @param string $titre
     * @param string $tag
     * @param string $description
     * @param $echeance
     * @param $dateCreation
     * @param int $importance
     * @throws Exception
     */
    public function __construct(string $titre, string $tag, string $description, $echeance, $dateCreation, int $importance)
    {
        if ($importance < 0 || 5 < $importance) {
            throw new Exception('L\'importance doit être comprise entre 0 et 5');
        }
        $this->titre = $titre;
        $this->tag = $tag;
        $this->description = $description;
        $this->echeance = $echeance;
        $this->dateCreation = $dateCreation;
        $this->importance = $importance;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getEcheance()
    {
        return $this->echeance;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @return int
     */
    public function getImportance(): int
    {
        return $this->importance;
    }


}
