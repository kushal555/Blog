<?php

namespace Tests\Feature;

use App\Book;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookTest extends TestCase
{

    use RefreshDatabase;
    /** @test */
    public function add_book_to_library(){

        $this->withoutExceptionHandling();
        $response  = $this->post('/books',[
            'title' => 'Cool Title',
            'author' => 'Author'
        ]);
        $response->assertOk();
        $this->assertCount(1,Book::all());
    }

}
