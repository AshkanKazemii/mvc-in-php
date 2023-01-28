<?php

namespace App\Models\Tables\Interface ;



interface DBInterface
{
    public function create(array $data) ;

    public function delete(array|int $data) ;
}