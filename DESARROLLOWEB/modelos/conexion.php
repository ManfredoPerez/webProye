<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=bndzjq8rvgwtpb1ca0gd-mysql.services.clever-cloud.com;dbname=bndzjq8rvgwtpb1ca0gd",
			            "uuechexzqjblh9nx",
			            "AEA2LRJfhZfJcMiZzzhU");

		$link->exec("set names utf8");

		return $link;

	}

}