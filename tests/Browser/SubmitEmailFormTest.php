<?php

namespace Tests\Browser;

use App\Sticker;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SubmitEmailFormTest extends DuskTestCase
{

    use DatabaseMigrations, DatabaseTransactions;

    /** @test */
    function a_user_can_submit_a_valid_email()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('sticker')
                    ->type('email', '2@gmail.com')
                    ->click('.sticker-button')
                    ->waitForText('Thanks');
        });
    }

    /** @test */
    function a_user_cant_submit_an_email_already_submitted()
    {
        $email = '1@gmail.com';

        Sticker::firstOrCreate(['email' => $email]);

        $this->browse(function (Browser $browser) use ($email) {
            $browser->visit('/')
                    ->assertSee('sticker')
                    ->type('email', $email)
                    ->click('.sticker-button')
                    ->waitForText('Sorry');
        });
    }
}
