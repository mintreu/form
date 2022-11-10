{{--<div class=" p-2 col-span-12 bg-gray-300">--}}
    {{--    @if(!$attributes['hidden'])--}}
    {{--        <fieldset class="rounded-2xl shadow-sm border border-gray-600 pl-6 pr-6 pt-3 pb-1 m-3 dark:border-2 dark:border-indigo-700 dark:text-gray-500 ">--}}
        {{--            <legend class="text-sm leading-tight font-medium px-2 ml-2  text-md">{{ ucfirst($attributes['label'] ?? $attributes['fieldName']) }}:</legend>--}}
        {{--            --}}{{-- Input --}}

        {{--            <div class="relative whitespace-nowrap inline-flex  place-items-center w-full">--}}
            {{--                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 ">--}}
                {{--                    <span class="text-gray-500 sm:text-sm">$</span>--}}
                {{--                </div>--}}

            {{--                <input--}}
            {{--                    name="{{$attributes['fieldName']}}"--}}
            {{--                    type="{{$attributes['type']}}"--}}
            {{--                    placeholder="{{ $attributes['placeholder'] }}"--}}
            {{--                    maxlength="{{ $attributes['max_length'] }}"--}}
            {{--                    @if(!is_null($attributes['default']))--}}
            {{--                        value="{{ $attributes['default'] }}"--}}
            {{--                    @endif--}}
            {{--                    @if(!($attributes['required'])) required @endif--}}
            {{--                    @if(!($attributes['placeholder']))--}}
            {{--                        placeholder="{{ $attributes['placeholder']}}"--}}
            {{--                    @endif--}}
            {{--                    class="w-full h-12 rounded-xl border-0 pl-7 pr-12"--}}
            {{--                >--}}

            {{--            </div>--}}

        {{--            <div class="grid gap-4 grid-cols-3 w-full pl-2 pr-2 pt-2 pb-1">--}}
            {{--                <small class="text-muted text-left w-full col-span-1 contrast-50">{{ $attributes['hint']}}</small>--}}
            {{--                @if(!empty($error[$attributes['fieldName']] ?? ''))--}}
            {{--                    <small class="text-red-500 text-right right-0 col-span-2">Small Text Section</small>--}}
            {{--                @endif--}}
            {{--            </div>--}}

        {{--        </fieldset>--}}
    {{--    @endif--}}
    {{--</div>--}}
