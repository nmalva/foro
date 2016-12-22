<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{

    use DatabaseTransactions;

    public function testBasicExample()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Nicolas Malvasio',
        ]);


        $this->actingAs($user, 'api') 
            ->visit('api/user')
             ->see('Nicolas Malvasio');
    }


    $
}
