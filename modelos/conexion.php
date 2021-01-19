<?php

class Conexion{

    static public function conectar(){

        $link = new PDO("mysql:host=localhost;dbname=covei", "root", "*Admin123");

        $link->exec("set names utf8");

        return $link;

    }

}