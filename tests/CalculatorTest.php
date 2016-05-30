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

    public function testCalculatorPageRegisteredUser()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->visit('/calc')
            ->see($user->email);
    }

    public function testFormCalculatorPage()
    {
        $user = factory(App\User::class)->create();
        $this->actingAs($user)
            ->visit('/calc');
        //TODO

    }
    
    
}
