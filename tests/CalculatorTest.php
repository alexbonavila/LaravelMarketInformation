<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CalculatorTest extends TestCase
{

    use DatabaseMigrations;

    public function testCalculatorPageNotRegisteredUser()
    {
        $this->visit('/calc')
            ->seePageIs('/login');
    }

}
