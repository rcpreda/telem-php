{{-- Simple menu item --}}
<div class="menu-item">
    <a class="menu-link {{ $active ?? false ? 'active' : '' }}" href="{{ $url }}">
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
    </a>
</div>
