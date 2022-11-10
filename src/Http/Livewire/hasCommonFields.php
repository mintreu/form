<?php

namespace Mintreu\LaravelForm\Http\Livewire;

trait hasCommonFields
{

    public function label(string $label)
    {
        $this->attributes['label'] = $label;
        return self::$field;
    }




    public function required(bool $status)
    {
        $this->attributes['required'] = $status;
        return self::$field;
    }


    public function hidden(bool $status)
    {
        $this->attributes['hidden'] = $status;
        return self::$field;
    }


    public function hint(string $hint)
    {
        $this->attributes['hint'] = $hint;
        return self::$field;
    }

    public function default(mixed $value)
    {
        $this->attributes['default'] = $value;
        return self::$field;
    }


    public function colspan(int $value)
    {
        $this->attributes['span'] = $value;
        return self::$field;
    }

    public function disable(bool $status=false)
    {
        $this->attributes['disable'] = $status;
        return self::$field;
    }

}
