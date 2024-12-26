<?php

namespace App\Models;

class AdminModel
{
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }
}
?>