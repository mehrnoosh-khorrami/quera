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
        $sql = "INSERT INTO books (id, title, author_name, publisher_name, demo)
        VALUES (:id, :title, :author_name, :publisher_name, :demo)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $id,
            ':title' => $title,
            ':author_name' => $author_name,
            ':publisher_name' => $publisher_name,
            ':demo' => $demo
        ]);
    }
}
