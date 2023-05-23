<?php
//  constantes para conexão

// nos labs do campus USER=root e PASSWORD="root"

define("SERVER", "localhost");
// define("SERVER", "127.0.0.1");
define("USER", "root");
define("PASSWORD", "");
define("DB", "academico");

//para postgres pgsql:host...
function cria_conexao()
{
    try {
        // criando objeto PDO para conexão com o banco de dados
        $con = new PDO("mysql:host=" . SERVER . ";dbname=" . DB, USER, PASSWORD);
        print("Conectado!!");
        return $con;
    } catch (PDOException $e) {
        print("Error: " . $e->getMessage());
    }
}
