<?php

class Alimentos
{

    private static ?\PDO $connection = null;

    private function __construct()
    {
        try
        {
            self::$connection = new \PDO('mysql:host=mysql;port=3306;dbname=MeAcompanha',"root", "root");
        } catch (\PDOException $e)
        {
            print_r($e->getMessage());
        }
          
    }

    public static function getInstance()
    {
        return new Alimentos;
    }

    public function getAlimentos(): array
    {
        $sql = "select * from alimentos";
        $stmt = self::$connection->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return $data;
    }

    public function getAlimentosContendo(string $search): array
    {
        $pattern = '%' . $search . '%';
        $sql = "select * from alimentos where alimento like :pattern order by alimento";

        $stmt = self::$connection->prepare($sql);
        $stmt->bindParam(':pattern', $pattern, PDO::PARAM_STR);

        $stmt->execute();

        $data = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $data;
    }

    public function getAlimentoPorID(int $id): array
    {
        $sql = "select * from alimentos where id = :id";
        $stmt = self::$connection->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $data = $stmt->fetch();

        return $data;
    }

    public function getAlimentoInfo(string $name): array
    {
        $info = [];
        return $info;
    }
}