<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseTruncation;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class LoginTest extends DuskTestCase
{

    use DatabaseTruncation;

    public function testBrowserTest(): void
    {

        $user = User::factory()->create([
            'name' => 'MadsTest2',
            'email' => 'mage@giganticas.com',
            'phoneNumber' => '20202152',
            'password' => bcrypt('kage'),
            'isAdmin'=> true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('login')
                ->type('email', $user->email)
                ->type('password', 'password')
                ->press('Log In')
                ->assertPathIs('/login');
        });

    }
}
