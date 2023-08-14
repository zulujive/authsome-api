<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_email_works(): void
    {
        Mail::to('oodiladido@gmail.com')->send(new WelcomeEmail());
    }
}
