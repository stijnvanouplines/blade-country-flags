<?php

declare(strict_types=1);

uses(Spatie\Snapshots\MatchesSnapshots::class);
uses(StijnVanouplines\BladeCountryFlags\Tests\TestCase::class);

it('compiles a single anonymous component', function () {
    $result = svg('flag-4x3-be')->toHtml();

    $this->assertMatchesSnapshot($result);
});

it('can add classes to icons', function () {
    $result = svg('flag-4x3-be', 'w-6')->toHtml();

    $this->assertMatchesSnapshot($result);
});

it('can add styles to icons', function () {
    $result = svg('flag-4x3-be', ['style' => 'width: 1.5rem'])->toHtml();

    $this->assertMatchesSnapshot($result);
});
