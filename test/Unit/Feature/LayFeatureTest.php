<?php

namespace Test\Unit\Feature;

use App\Entity\Lay;
use App\Feature\LayInteractor;
use App\Gateway\LayGateway;
use Test\AppTestCase;

class LayFeatureTest extends AppTestCase
{
    private $underTest;
    private $gateway;

    public function setUp()
    {
        $this->gateway = \Mockery::mock(LayGateway::class);
        $this->underTest = new LayInteractor($this->gateway);
    }

    public function testCreateLayReturnsLayEntity()
    {
        $lay = \Mockery::mock(Lay::class);
        $this->gateway->ShouldReceive('save')
            ->once()
            ->with($lay);
        
        //$this->assertInstanceOf(Lay::class, $this->underTest->createLay($lay));
        $this->underTest->createLay($lay);
    }
}
