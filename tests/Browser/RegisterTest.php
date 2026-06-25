<?php

use Illuminate\Support\Facades\Auth;

test('registers a new user', function (): void {
    visit('/register')
        ->fill('name', 'Milly Doe')
        ->fill('email', 'milly@example.com')
        ->fill('password', 'millydoe1234!*')
        ->click('@submit')
        ->assertPathIs('/');

    $this->assertAuthenticated();

    expect(Auth::user())->toMatchArray([
        'name' => 'Milly Doe',
        'email' => 'milly@example.com'
    ]);
});
