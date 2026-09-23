@props(['type' => 'aman'])

@php
    $colors = [
        'aman' => 'bg-green-100 text-green-800',
        'menipis' => 'bg-yellow-100 text-yellow-800',
        'habis' => 'bg-red-100 text-red-800',
    ];
    $colorClass = $colors[$type] ?? $colors['aman'];
@endphp

<span {{ $attributes->merge(['class' => "inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium $colorClass"]) }}>
    {{ $slot }}
</span>