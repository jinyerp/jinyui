{{-- https://heroicons.com/ --}}
<svg 
@if (isset($attributes)) 
{{$attributes->merge(['class' => 'feather align-middle'])}} 
@else 
    class="feather align-middle"
@endif  
    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down align-middle me-2"><polyline points="6 9 12 15 18 9"></polyline></svg>
