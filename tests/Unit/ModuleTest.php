<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class ModuleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_it_stores_new_module(){
        $response = $this->post('/module/create',[
            'course_id' => 1,
            'title' => 'PHP Unit Test',
            'active' => 1,
            'position' => 5,
            'description' => 'A look into units and feature tests in Laravel'
        ]);
        $response->assertRedirect('/');
    }
}
