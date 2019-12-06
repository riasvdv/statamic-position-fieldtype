![Icon](icon.svg)

[![Latest Version](https://img.shields.io/github/release/riasvdv/statamic-position-fieldtype.svg?style=flat-square)](https://github.com/riasvdv/statamic-position-fieldtype/releases)

# Position Fieldtype plugin for Statamic

Provide better UX to clients by letting them pick from icons.

![Screenshot](./docs/img/position-fieldtype-screenshot.png)

## License

Position requires a license to be used while on a production site.  
You can purchase one at https://statamic.com/marketplace/addons/position-fieldtype.

You may use Position without a license while Statamic is in [Trial mode](https://docs.statamic.com/knowledge-base/trial-mode).

## Installation

Require it using Composer.

```
composer require rias/statamic-position-fieldtype
```

Publish the assets:

```
php artisan vendor:publish --provider="Rias\PositionFieldtype\ServiceProvider"
```

## Using the position fieldtype

Add the fieldtype to your fieldset. You can choose to hide certain positions, by default they are all visible.

```yaml
sections:
  main:
    display: Main
    fields:
      -
        handle: position
        field:
          type: position
          display: Position
          left: true
          center: true
          right: true
          full: true
          drop-left: true
          drop-right: false
          default: right
```

## Using Position

The output of the fieldtype is equal to the keys in the options array.

```twig
{{ position }} // center
```

Brought to you by [Rias](https://rias.be)
