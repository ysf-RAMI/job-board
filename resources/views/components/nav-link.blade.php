@php
$current = "bg-gray-950/50 text-white";
$default = "text-gray-300 hover:bg-white/5 hover:text-white";
@endphp
<a href="{{ $href }}" aria-current="page" class="rounded-md {{ request()->is($href) ? $current : $default }} px-3 py-2 text-sm font-medium">
    {{ $slot }}
</a>