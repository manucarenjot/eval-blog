<?php
class Connect extends Config
{
    /**
     * @param $server
     * @param $db
     * @param $charset
     * @param $user
     * @param $password
     */


    public function __construct($server, $db, $port,$charset, $user, $password)
    {
        try {
            $dns = "mysql:host={$server};dbname={$db};port=$port;={$charset}";
            $this->pdo = new PDO($dns, $user, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'connection effectuée';
        } catch (PDOException $e) {
            echo "Une erreur est intervenue ";
            file_put_contents('PDOerrorlog.txt', $e->getMessage() .
                " " . date('d/m/Y H:i:s') . "\n", FILE_APPEND);;
        }
    }

}