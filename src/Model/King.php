<?php
//namespace namespace App\Model;

class King extends AbstractModel
{
    /**
     * Identifiant en base de données
     * @var int
     */
    protected ?int $id;

    /**
     * Nom de la figure
     * @var string
     */
    protected string $name;

    public function __construct(
        ?int $id,
        string $name,
    ) {
        $this->id = $id;
        $this->name = $name;
    }
}
