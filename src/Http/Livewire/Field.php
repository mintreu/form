<?php

namespace Mintreu\LaravelForm\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Field extends Component
{
    use hasCommonFields;

    protected string $view = 'form::livewire.form.field.default';
    protected static Field $field;
    public static string $fieldName;
    public array $attributes;


    final public function __construct(string $name,array $attributes=[])
    {


        $this->attributes = !empty($attributes) ? $attributes : [
            'fieldName' => $name,
            'label'     => null,
            'required'  => false,
            'icon'      => null,
            'hidden'    => false,
            'placeholder' => null,
            'max_length' => 255,
            'prefix'    => null,
            'suffix'    => null,
            'hint'      => null,
            'default'   => null,
            'span'      => 12,
            'disable'   => false,
            'type'      => 'text',
            'option'    => []
        ];
        self::$fieldName = $name;



       // dd($name,$attributes,$this->attributes);
    }



    public static function make(string $name): static
    {
        self::$field= app(static::class, ['name' => $name]);
        return self::$field;
    }





    public function render():View
    {

        // dd($this->attributes);
        return view($this->view,$this->attributes);
    }



}
