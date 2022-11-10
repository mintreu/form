<?php

namespace Mintreu\LaravelForm\Http\Livewire\Field;

use Mintreu\LaravelForm\Http\Livewire\Field;

class Select extends Field
{

    public string $alise = 'form::field.select';
    protected string $view = 'form::livewire.field.select';




    /**
     * @param array $option
     * @return Field
     */
    public function option(array $option)
    {


        $this->attributes['option'] = $option;

        return self::$field;
    }


}
