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

    /**
     * Nom du joueur
     * @var string
     */
    protected string $player;

    public function __construct(
        ?int $id,
        string $name,
        string $player,
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->player = $player;
    }
}
