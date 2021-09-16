<?php

require_once dirname(__FILE__, 3) . '/application/config/Database.php';

class GrafikModel extends Database {
    protected function GetShopID($name)
    {
        $this->prepare('SELECT id FROM `sklepy` WHERE `nr_sklepu` = ?');
		$this->statement->execute([$name]);
        $row = $this->statement->fetch();
        foreach($row as $id) {
            return $id;
        }
        return false;
    }
    protected function GetShopName($id)
    {
        $this->prepare('SELECT nr_sklepu FROM `sklepy` WHERE `id` = ?');
		$this->statement->execute([$id]);
        $row = $this->statement->fetch();
        while($row) {
            return $row;
        }
        return false;
    }
    protected function drawUsers($shopname)
    {
        $this->prepare('SELECT username FROM `users` WHERE `sklepy` = ?');
        $this->statement->execute([1]);
        $rows = $this->statement->fetchAll();
        $array = json_decode(json_encode($rows), true);
        
        foreach ($array as $key => $value) {
            foreach($value as $key1 => $value2)
            {
                echo ' <th scope="col">' . $value2 . '</th>';
            }
        }   
    }
   
}