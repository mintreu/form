<?php

namespace Mintreu\LaravelForm\Http\Livewire\Field;

use Mintreu\LaravelForm\Http\Livewire\Field;

class TextInput extends Field
{
    public string $alise = 'form::field.text-input';
    protected string $view = 'form::livewire.field.text-input';


    public function hasIcon(string $icon)
    {
        $this->attributes['icon'] = $icon;
        return self::$field;
    }


    public function placeholder(string $placeholder)
    {
        $this->attributes['placeholder'] = $placeholder;
        return self::$field;
    }

    public function maxLength(int $limit)
    {
        $this->attributes['max_lenght'] = $limit;
        return self::$field;
    }

    public function prefix(string $prefix)
    {
        $this->attributes['prefix'] = $prefix;
        return self::$field;
    }

    public function suffix(string $suffix)
    {
        $this->attributes['suffix'] = $suffix;
        return self::$field;
    }

    public function email()
    {
        $this->attributes['type'] = 'email';
    }

    public function tel()
    {
        $this->attributes['type'] = 'tel';
    }

    public function url()
    {
        $this->attributes['type'] = 'url';
    }

    public function int()
    {
        $this->attributes['type'] = 'number';
    }

    public function float()
    {
        $this->attributes['type'] = 'number';
    }


}
