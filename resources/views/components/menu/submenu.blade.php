{{-- Menu item with submenu (accordion) --}}
@php
    $hasActiveChild = isset($items) && collect($items)->contains('active', true);
@endphp
<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ $hasActiveChild ? 'here show' : '' }}">
    <span class="menu-link">
        @isset($icon)
        <span class="menu-icon">
            <i class="ki-duotone {{ $icon }} fs-2">
                @for($i = 1; $i <= ($paths ?? 2); $i++)
                <span class="path{{ $i }}"></span>
                @endfor
            </i>
        </span>
        @endisset
        <span class="menu-title">{{ $title }}</span>
        <span class="menu-arrow"></span>
    </span>
    <div class="menu-sub menu-sub-accordion {{ $hasActiveChild ? 'show' : '' }}">
        @if(isset($items))
            @foreach($items as $item)
                @include('components.menu.sub-item', $item)
            @endforeach
        @else
            {!! $slot ?? '' !!}
        @endif
    </div>
</div>
