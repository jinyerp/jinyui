{{-- https://heroicons.com/ --}}
<svg 
@if (isset($attributes)) 
    {{$attributes->merge(['class' => 'feather align-middle'])}} 
@else 
    class="feather align-middle"
@endif  
    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <rect x="1" y="6" width="18" height="12" rx="2" ry="2"></rect>
    <line x1="23" y1="13" x2="23" y2="11"></line>
</svg>