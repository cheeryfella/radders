<?php

namespace App\Feature;

use App\Entity\Lay;
use App\Gateway\LayGateway;

class LayInteractor
{
    private $layGateway;

    public function __construct(LayGateway $gateway)
    {
        $this->layGateway = $gateway;
    }
    
    public function createLay(Lay $lay)
    {
        $this->layGateway->save($lay);
        return $lay;
        
    }
}
