<?php

namespace Mintreu\LaravelForm\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    public array $formComponents;
    public string $alise = 'form::form';


    public function mount($components)
    {
       $this->formComponents = $components;
//       dd($this->formComponents);
    }



    public function render()
    {
        return view('form::livewire.form',$this->formComponents);
    }

}
