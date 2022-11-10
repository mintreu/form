<div class="w-full p-3">

    <h1 class="text-2xl ml-5 text-indigo-700">Form Title</h1>

    <form wire:submit.prevent="save">
        @csrf
        <div class="p-5 grid grid-cols-12 ">
            @foreach($formComponents as $formComponent)
                {{-- {{ dd($form,$formComponent->alise,$formComponent->attributes) }}--}}

                @livewire($formComponent->alise,['name' => $formComponent->attributes['fieldName'], 'attributes' => $formComponent->attributes], key($formComponent->attributes['fieldName']))

            @endforeach
        </div>





            <button class="p-3 m-2 bg-lime-500 rounded-lg w-48">Save</button>
            <button class="p-3 m-2 bg-red-700 text-white rounded-lg w-48" type="reset">Cancel</button>
    </form>

</div>
