<?php

class Books
{
    protected $db;
    
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function add($id, $title, $author_name, $publisher_name, $demo)
    {
        $sql = "INSERT INTO books VALUES ('$id', '$title', '$author_name', '$publisher_name', '$demo');";  
        $this->db->exec($sql);
    }
}

