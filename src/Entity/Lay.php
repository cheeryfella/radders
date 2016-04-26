<?php


namespace App\Entity;

use App\Entity\Lay\LayStruct;

class Lay
{
    private $id;
    private $user;
    private $betableEntity;
    private $dateTime;
    private $amount;
    private $liability;
    private $matchedBetId;
    private $siteId;
    private $commission;
    
    public function __construct(LayStruct $struct)
    {
        $this->id = $struct->id;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}
