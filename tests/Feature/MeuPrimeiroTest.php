<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Spatie\Browsershot\Browsershot;


class MeuPrimeiroTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
      Browsershot::url('https://laravel.com')->save('/img/cards/teste.png');

    }
}
