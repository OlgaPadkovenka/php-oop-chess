<?php

namespace App\Model;

use AbstractModel;
use PDO;

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

    static public function  findAll()
    {

        // Configure la connexion à la base de données
        $databaseHandler = new PDO("mysql:host=localhost;dbname=chess", 'root', 'root');
        $statement = $databaseHandler->query('SELECT * FROM `bishop`');
        $bishopDate = $statement->fetchAll();
        //dd($bishopDate);
    }
}
