<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class DownloadInfoTest
 */
class DownloadInfoTest extends TestCase
{

    use DatabaseMigrations;

    /**
     *Testing Download Info Page width Not Registered User
     */
    public function testDownloadInfoPageNotRegisteredUser()
    {
        $this->visit('/download_info')
            ->seePageIs('/login');
    }

    /**
     *Testing Download Info Page width Registered User
     */
    public function testDownloadInfoPageRegisteredUser()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->visit('/download_info')
            ->see('Company Symbol');
    }


    /**
     *Testing Download Info Form
     */
    public function testDownloadInfoForm()
    {
        //TODO
        $this->assertTrue(true);
//        $user = factory(App\User::class)->create();
//
//        $this->actingAs($user)
//            ->visit('/download_info')
//            ->type('AAPL', 'InputSymbol')
//            ->type('json', 'InputExtension')
//            ->press('Download')
//            ->seePageIs('/download_info');
    }
}
