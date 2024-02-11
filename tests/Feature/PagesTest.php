<?php

use function Pest\Laravel\get;

test('can load pages', function ($page) {
    get($page)->assertOk();
})->with([
    '/'
]);

test('/docs redirects', function () {
    get('docs')->assertRedirect();
});