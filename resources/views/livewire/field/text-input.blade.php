<div class="col-span-{{ $attributes['span']}}  mb-2 rounded-lg">
    @if(!$attributes['hidden'])
        <fieldset class="rounded-2xl shadow-sm border border-gray-600 p-2 ml-2 mr-2  dark:border-2 dark:border-indigo-700 dark:text-gray-500 ">
            <legend class="text-sm leading-tight font-medium ml-5  text-md">{{ ucfirst($attributes['label'] ?? $attributes['fieldName']) }}:</legend>


            <div class="relative whitespace-nowrap inline-flex  place-items-center w-full">


                @if($attributes['prefix'])
                    <span class="text-gray-500 sm:text-sm text-muted font-semibold">{{$attributes['prefix']}}</span>
                @endif


                <input
                    name="{{$attributes['fieldName']}}"
                    type="{{$attributes['type']}}"
                    placeholder="{{ $attributes['placeholder'] }}"
                    maxlength="{{ $attributes['max_length'] }}"
                    @if(!is_null($attributes['default']))
                        value="{{ $attributes['default'] }}"
                    @endif
                    @if(!($attributes['required'])) required @endif
                    @if(!($attributes['placeholder']))
                        placeholder="{{ $attributes['placeholder']}}"
                    @endif
                    class="w-full h-8 ml-2 mr-2 rounded-xl border-0 "
                >

                @if($attributes['suffix'])
                    <span class="text-gray-500 sm:text-sm text-muted font-semibold">{{$attributes['suffix']}}</span>
                @endif

            </div>

            <div class="grid gap-4 grid-cols-3 w-full pl-2 pr-2 pt-2 pb-1">
                <small class="text-muted text-left w-full col-span-1 contrast-50">{{ $attributes['hint']}}</small>
                @if(!empty($error[$attributes['fieldName']] ?? ''))
                    <small class="text-red-500 text-right right-0 col-span-2">Small Text Section</small>
                @endif
            </div>

        </fieldset>
    @endif
</div>
