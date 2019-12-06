<?php

namespace Rias\PositionFieldtype;

use Statamic\Fields\Fieldtype;
use Statamic\Support\Str;

class PositionFieldtype extends Fieldtype
{
    protected $icon = 'fieldset';

    static $options = [
        'left',
        'center',
        'right',
        'full',
        'drop-left',
        'drop-right',
    ];

    protected function configFieldItems(): array
    {
        $fields = collect(self::$options)->mapWithKeys(function (string $option) {
            return [
                $option => [
                    'type' => 'toggle',
                    'display' => ucfirst(Str::deslugify($option)),
                    'width' => 50,
                    'default' => true,
                ]
            ];
        })->toArray();

        $fields['default'] = [
            'type' => 'select',
            'display' => 'Default',
            'options' => collect(self::$options)->flatMap(function (string $option) {
                return [$option => ucfirst(Str::deslugify($option))];
            })->toArray(),
        ];

        return $fields;
    }
}
