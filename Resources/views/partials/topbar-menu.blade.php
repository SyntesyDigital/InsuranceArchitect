@foreach(config('architect::menu') as $item)

    {{-- If current user can show this menu --}}
    @if(empty($item['permissions']) || has_permission($item['permissions']))

        {{-- Request pattern for display active of not the menu item --}}
        @if(!empty($item['patterns']))
            @php
                $isActive = collect($item['patterns'])->filter(function($pattern){
                    return Request::is($pattern) ? true : false;
                })->first();
            @endphp
        @endif

        {{-- Render the menu item --}}
        <li class="{{ $isActive ? 'active' : false }}">
            <a href="{{ route($item['route']) }}">
                {{ Lang::get($item['label']) }}
            </a>
        </li>

    @endif

@endforeach()
