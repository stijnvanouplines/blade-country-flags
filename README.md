<p align="center">
    <img src="https://github.com/stijnvanouplines/blade-country-flags/raw/main/socialcard-blade-country-flags.png" width="1280" title="Social Card Blade Country Flags">
</p>

# Blade Country Flags

<a href="https://github.com/stijnvanouplines/blade-country-flags/actions?query=workflow%3ATests">
    <img src="https://github.com/stijnvanouplines/blade-country-flags/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://github.styleci.io/repos/377258849">
    <img src="https://github.styleci.io/repos/377258849/shield?style=flat" alt="Code Style">
</a>
<a href="https://packagist.org/packages/stijnvanouplines/blade-country-flags">
    <img src="https://img.shields.io/packagist/v/stijnvanouplines/blade-country-flags" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/stijnvanouplines/blade-country-flags">
    <img src="https://img.shields.io/packagist/dt/stijnvanouplines/blade-country-flags" alt="Total Downloads">
</a>

A package to easily make use of country flags in your Laravel Blade views.

This package is using SVG flags provided by [flag-icon-css](https://github.com/lipis/flag-icon-css). All credits go to this project and all of it's creators.

## Requirements

- PHP 7.4 or higher
- Laravel 8.0 or higher

## Installation

```bash
composer require stijnvanouplines/blade-country-flags
```

## Blade Icons

Blade Country Flags uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Configuration

Blade Country Flags also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-country-flags.php` config file:

```bash
php artisan vendor:publish --tag=blade-country-flags-config
```

## Usage

Flags can be used as self-closing Blade components which will be compiled to SVG flags:

```blade
<x-flag-4x3-be/>
```

You can also pass classes to your flag components:

```blade
<x-flag-4x3-be class="w-6"/>
```

And even use inline styles:

```blade
<x-flag-4x3-be style="width: 1.5rem"/>
```

A square flag can be referenced like this:

```blade
<x-flag-1x1-be/>
```

### Raw SVG Flags

If you want to use the raw SVG flags as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-country-flags --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-country-flags/4x3-be.svg') }}" width="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Credits

- [Blade Icons](https://github.com/blade-ui-kit/blade-icons)
- [flag-icon-css](https://github.com/lipis/flag-icon-css)

## License

Blade Country Flags is open-sourced software licensed under [the MIT license](LICENSE.md).
