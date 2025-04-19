<?php

class Post
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getPage($page_number, $per_page)
    {
        $limmit = ($page_number - 1) * $per_page;
        $sql = "SELECT * FROM posts
                ORDER BY posted_at DESC
                LIMIT $per_page OFFSET $limmit";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $posts;
    }

    public function countAll()
    {
        $sql = "SELECT COUNT(*) FROM posts";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $count = $stmt->fetchColumn();
        return $count;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM posts WHERE id = $id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $post = $stmt->fetch(PDO::FETCH_ASSOC);
        if(!$post) {
            return NULL;
        } else {
            return $post;
        }
    }
}



