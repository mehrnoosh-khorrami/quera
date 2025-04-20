<?php

namespace App\Models;

use Core\DB;

class User
{
    public static function all()
    {
        $db = DB::get();
        $stmt = $db->query('SELECT * FROM users');
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $users = [];
        foreach ($rows as $row) {
            unset($row['password']);
            $user = new User;
            foreach ($row as $key => $value) {
                $user->$key = $value;
            }
            $users[] = $user;
        }
        return $users;
    }
}
