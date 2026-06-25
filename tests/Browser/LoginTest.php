<?php

use App\Models\User;

test('logins an existing user', function (): void {
    $user = User::factory()->create(['password' => 'millydoe1234!*']);

    visit('/login')
        ->fill('email', $user->email)
        ->fill('password', 'millydoe1234!*')
        ->click('@submit')
        ->assertPathIs('/');

    $this->assertAuthenticated();
});

test('logs out an user', function (): void {
    $user = User::factory()->create();

    $this->actingAs($user);

    visit('/')
        ->click('@logout');

    $this->assertGuest();
});