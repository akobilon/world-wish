<?php

class Player
{
   private $db;

   public function __construct()
   {
      $this->db = new PDO("mysql:host=localhost;dbname=exo_game_bd", "root", "");
   }

   public function read(String $classe)
   {
      $sql = "SELECT * FROM ".$classe;
      $req = $this->db->query($sql);
      
      return $req;
   }
}