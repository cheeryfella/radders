<?php

namespace App\Gateway;

use App\Entity\Lay;

interface LayGateway
{
    public function findById($id);

    public function save(Lay $lay);
}
