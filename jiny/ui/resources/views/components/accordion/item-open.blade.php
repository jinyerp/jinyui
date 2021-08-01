<div {{ $attributes->merge(['class' => 'accordion-item']) }}>
    @php
        $collapse = uniqid("collpase_");
    @endphp

    <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse"
            data-bs-target="#{{uistack()->collapseId()}}" aria-expanded="true" >
            {{$title}}
        </button>
    </h2>
    <div id="{{uistack()->collapseId()}}" class="accordion-collapse collapse" 
    >
        <div class="accordion-body">
            {{$slot}}
        </div>
    </div>

</div>