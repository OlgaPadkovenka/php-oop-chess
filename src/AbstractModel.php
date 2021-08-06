<?php
require_once __DIR__ . '/vendor/autoload.php';


class AbstractModel
{
    /**
     * Identifiant en base de données
     * @var integer|null
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
