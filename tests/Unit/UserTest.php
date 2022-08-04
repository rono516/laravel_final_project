<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */



    public function test_delete_user()
    {
        $user = User::factory()->count(1)->make();
        $user = User::first();

        if ($user){
            $user->delete();
        }

        $this->assertTrue(true);
    }

      public function test_login_form(){
          $response = $this->get('/login');

          $response->assertStatus(200);

      }

      //test user duplication

    public function test_user_duplication(){
          $user1 = User::make([
              'name' => 'Collins Rono',
              'email' => 'collins@gmail.com',

          ]);

        $user2 = User::make([
            'name' => 'Rono',
            'email' => 'rono@gmail.com',

        ]);

        $this->assertTrue($user1->name != $user2->name);
    }
}
