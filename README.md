# Freetrack Icons Template

<a href="https://github.com/lamaxi/ft-icons/actions?query=workflow%3ATests">
    <img src="https://github.com/blade-ui-kit/ft-icons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/lamaxi/ft-icons">
    <img src="https://img.shields.io/packagist/v/lamaxi/ft-icons" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/lamaxi/ft-icons">
    <img src="https://img.shields.io/packagist/dt/lamaxi/ft-icons" alt="Total Downloads">
</a>

> This is a template repository for new icon packages for [Blade Icons](https://github.com/blade-ui-kit/blade-icons). Start a new repo with this and replace the relevant things below:
> 
> 1. `lamaxi` with your GitHub organization
> 2. `ft-icons` with your repository name
> 3. `Freetrack Heroicons` & `Freetrack Icons Template` with your icon set name
> 4. Any other reference to `Heroicons` with your icon set name
> 5. `Andrii Maksymchuk` with your name
> 
> Then, make sure [the implementation](./src) is correct, that you set up [icon generation](https://github.com/blade-ui-kit/blade-icons#generating-icons) and that [your tests](./tests) pass. And remove this quote block from your readme. When you've published your package on Packagist, make sure to send it in to [the Blade Icons package list](https://github.com/blade-ui-kit/blade-icons#icon-packages).

A package to easily make use of [Heroicons](https://github.com/refactoringui/heroicons) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [heroicons.com](https://heroicons.com/).

## Requirements

- PHP 8.2 or higher
- Laravel 10.0 or higher

## Installation

```bash
composer require lamaxi/ft-icons
```

## Updating

Please refer to [`the upgrade guide`](UPGRADE.md) when updating the library.

## Blade Icons

Freetrack Heroicons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Configuration

Freetrack Heroicons also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `ft-icons.php` config file:

```bash
php artisan vendor:publish --tag=ft-icons-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-heroicon-o-adjustments/>
```

You can also pass classes to your icon components:

```blade
<x-heroicon-o-adjustments class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-heroicon-o-adjustments style="color: #555"/>
```

The solid icons can be referenced like this:

```blade
<x-heroicon-s-adjustments/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=ft-icons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/ft-icons/o-adjustments.svg') }}" width="10" height="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Freetrack Heroicons is developed and maintained by Andrii Maksymchuk.

## License

Freetrack Heroicons is open-sourced software licensed under [the MIT license](LICENSE.md).
