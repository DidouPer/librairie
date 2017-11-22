<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * test home page.
     *
     * @return void
     */
    public function testHomepageTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
     * test list book page.
     *
     * @return void
     */
    public function testListBookTest()
    {
        $response = $this->get('/book/');
        $response->assertStatus(404);
    }

    /**
     * test create book page.
     *
     * @return void
     */
    public function testCreateBookTest()
    {
        $response = $this->get('/book/create/');
        $response->assertStatus(200);
    }
}
