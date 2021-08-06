<?php
class PDO
{
    public PDO $pdo;
    /**
     * L'unique instance du service
     * @var 
     */
    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=chess", 'root', 'root');
    }
}
