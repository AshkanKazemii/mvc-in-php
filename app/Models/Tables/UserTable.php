<?php

namespace App\Models\Tables ;

use App\Models\Tables\Interface\DBInterface;

class UserTable implements DBInterface
{
    public function create(array $data)
    {
        // query : create user
    }

    public function delete(array|int $data)
    {
        // query : delete user
    }

}