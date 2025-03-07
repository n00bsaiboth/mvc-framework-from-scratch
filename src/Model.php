<?php

namespace App;

use PDO;
use PDOException;
use Dotenv\Dotenv;

class Model {
    private object $pdo;

    public function __construct() {
        $dotenv = Dotenv::createImmutable(__DIR__ . '../../');
        $dotenv->load();

        $host = $_ENV['DB_HOST'];
        $db = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'];
        $pass = $_ENV['DB_PASS'];

        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->exec("SET NAMES utf8");
        } catch (PDOException $e) {
            throw new PDOException("Error: Could not connect to the database. " . $e->getMessage());
            // die("Error: Could not connect to the database. " . $e->getMessage());
        }
    }

    public function query(string $query, array $parameters = []): array {
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($parameters);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            throw new PDOException("Error: Database query failed. " . $e->getMessage());
            // die("Error: Database query failed. " . $e->getMessage());
        }
    }
}