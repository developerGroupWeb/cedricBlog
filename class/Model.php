<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 19/08/2018
 * Time: 02:39
 */
abstract class Model
{
    private static $_db;

    /**
     *
     */
    private static function setDb()
    {
        self::$_db = new PDO('mysql:host=127.0.0.1; dbname=cedric; charset=utf8', 'root', '');
        self::$_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    /**
     * @return mixed
     */
    protected static function getDb()
    {
        if(self::$_db == null)
        {
            self::setDb();
        }

        return self::$_db;
    }

    /**
     * @param $table
     * @param $email
     * @return mixed
     */
    static function row($table, $email){

        $query = self::getDb()->prepare("SELECT * FROM $table WHERE email = ?");
        $query->execute(array($email));

        return $query->rowCount();
    }

    /**
     * @param $table
     * @param array $data
     */
    static function update($table, $data = []){

        if($data != null) {

            $query = self::getDb()->prepare("UPDATE $table SET token = ? WHERE email = ? ");
            $query->execute($data);
        }
    }

    /**
     * @param $table
     * @param array $data
     */
    static function insertToken($table, $data = []){

        if($data != null){

            $query = self::getDb()->prepare("INSERT INTO $table(email, token) VALUES(?, ?)");
            $query->execute($data);
        }
    }

    /**
     * @param $table
     * @param $email
     * @return mixed
     */
    static function getUser($table, $email){

        $query = self::getDb()->prepare("SELECT * FROM $table WHERE email = ?");
        $query->execute(array($email));

        return $result = $query->fetchAll();
    }

    /**
     * @param $table
     * @param array $data
     */
    static function insertUser($table, $data = []){

        if($data != null){

            $query = self::getDb()->prepare("INSERT INTO $table(firstname, lastname, email, password) VALUES(?, ?, ?, ?)");
            $query->execute($data);
        }
    }

    /**
     * @param $table
     * @param array $data
     */
    static function insertUserChronic($table, $data = []){

        if($data != null){

            $query = self::getDb()->prepare("INSERT INTO $table(firstname, lastname, email) VALUES(?, ?, ?)");
            $query->execute($data);
        }
    }

    /**
     * @param $table
     * @return array
     */
     static function getAll($table)
    {
        $var   = array();

        $query = self::getDb()->prepare('SELECT * FROM ' .$table. ' ORDER BY id DESC');

        $query->execute();

        while($data = $query->fetch())
        {
            $var[] = $data;
        }
        return $var;
        #$query->closeCursor();
    }

}



