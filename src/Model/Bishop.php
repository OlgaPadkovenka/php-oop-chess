<?php

namespace App\Model;

use AbstractModel;


class Bishop extends AbstractModel
{
    /**
     * Identifiant en base de données
     * @var int
     */
    protected int $id;

    /**
     * Nom de la figure
     * @var string
     */
    protected string $name;

    public function __construct(
        int $id,
        string $name,
    ) {
        $this->id = $id;
        $this->name = $name;
    }
}
