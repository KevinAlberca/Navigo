<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthTest extends TestCase
{

    public function testFailedRegistration() {
        $this->visit('/register')
            ->type('Test', 'firstname')
            ->type('Unit', 'lastname')
            ->type('unit@test.dev', 'email')
            ->type('random_password', 'password') // The main password & confirm arn't same
            ->type('random_passsword', 'password_confirmation')
            ->press('submit_form')
            ->seePageIs('/register');
    }

    public function testGoodRegistration() {

        $this->visit('/register')
//            ->post('/register', [
//            'firstname' => 'Test',
//            'lastname' => 'Unit',
//            'email' => 'unit@test.dev',
//            'password' => 'random_password',
//            'password_confirmation' => 'random_password',
//            ])
//                ->type
        ->seePageIs('/');
    }
    //
    // public function testLogin() {
    //     $this->visit('/login')
    //         ->type('unit@test.dev', 'email')
    //         ->type('random_password', 'password')
    //         ->press(ucfirst(trans('auth.login')))
    //         ->seePageIs('/home');
    // }
    //
    // public function testLogout() {
    //     $user = factory(App\Model\User::class)->create();
    //
    //     $this->actingAs($user)
    //         ->visit('/')
    //         ->click('Logout')
    //         ->seePageIs('/login');
    // }
}
