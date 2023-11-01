<?php

use function Pest\Laravel\get;
use function Pest\Laravel\post;

test('can list notes', function () {
    get('/notes')->assertStatus(200);
});

test('can create a note', function () {
    post('/notes', [
        'title' => 'Test title',
        'body' => 'Test body',
    ])->isOk();
})->skip();
