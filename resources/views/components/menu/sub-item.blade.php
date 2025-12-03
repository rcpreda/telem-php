{{-- Submenu item (with bullet) --}}
<div class="menu-item">
    <a class="menu-link {{ $active ?? false ? 'active' : '' }}" href="{{ $url }}">
        <span class="menu-bullet">
            <span class="bullet bullet-dot"></span>
        </span>
        <span class="menu-title">{{ $title }}</span>
    </a>
</div>
