<x-theme theme="adminkit" class="bootstrap">

    <x-main-content>
        <x-container>
            <h1 class="h3 mb-3">list 컴포넌트</h1>

            <x-row>
                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <x-card-title>Basic Group</x-card-title>
                            <x-card-subtitle>여러 항목들을 하나의 그룹으로 목록화 할 수 있습니다.</x-card-subtitle>
                        </x-card-header>
                        <x-card-body class="text-center">
                            <x-list>                                
                                <x-list-item>An item</x-list-item>
                                <x-list-item>A second item</x-list-item>
                                <x-list-item>A third item</x-list-item>
                                <x-list-item>A fourth item</x-list-item>
                                <x-list-item>And a fifth one</x-list-item>
                            </x-list>                            
                        </x-card-body>
                    </x-card>
                </x-col-6>

                
                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <x-card-title>Flush</x-card-title>
                            <x-card-subtitle></x-card-subtitle>
                        </x-card-header>
                        <x-card-body class="text-center">
                            <x-list class="list-group-flush">
                                <x-list-item>An item</x-list-item>
                                <x-list-item>A second item</x-list-item>
                                <x-list-item>A third item</x-list-item>
                                <x-list-item>A fourth item</x-list-item>
                                <x-list-item>And a fifth one</x-list-item>
                            </x-list>                            
                        </x-card-body>
                    </x-card>
                </x-col-6>
 

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <x-card-title>Active Item</x-card-title>
                            <x-card-subtitle></x-card-subtitle>
                        </x-card-header>
                        <x-card-body class="text-center">
                            <x-list>
                                <x-list-item class="active" aria-current="true">An active item</x-list-item>
                                <x-list-item>A second item</x-list-item>
                                <x-list-item>A third item</x-list-item>
                                <x-list-item>A fourth item</x-list-item>
                                <x-list-item>And a fifth one</x-list-item>
                            </x-list>
                            
                        </x-card-body>
                    </x-card>
                </x-col-6>


                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <x-card-title>Disable</x-card-title>
                            <x-card-subtitle></x-card-subtitle>
                        </x-card-header>
                        <x-card-body class="text-center">
                            <x-list>
                                <x-list-item class="disabled" aria-disabled="true">A disabled item</x-list-item>
                                <x-list-item>A second item</x-list-item>
                                <x-list-item>A third item</x-list-item>
                                <x-list-item>A fourth item</x-list-item>
                                <x-list-item>And a fifth one</x-list-item>
                            </x-list>
                            
                        </x-card-body>
                    </x-card>
                </x-col-6>


                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <x-card-title>Link</x-card-title>
                            <x-card-subtitle></x-card-subtitle>
                        </x-card-header>
                        <x-card-body class="text-center">
                            <x-list-group>
                                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                    The current link item
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                                <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                                <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                                <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a>
                            </x-list-group>
                        </x-card-body>
                    </x-card>
                </x-col-6>


                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <x-card-title>Button</x-card-title>
                            <x-card-subtitle></x-card-subtitle>
                        </x-card-header>
                        <x-card-body class="text-center">
                            <x-list-group>
                                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                                    The current button
                                </button>
                                <button type="button" class="list-group-item list-group-item-action">A second item</button>
                                <button type="button" class="list-group-item list-group-item-action">A third button item</button>
                                <button type="button" class="list-group-item list-group-item-action">A fourth button item</button>
                                <button type="button" class="list-group-item list-group-item-action" disabled>A disabled button item</button>
                            </x-list-group>
                            
                        </x-card-body>
                    </x-card>
                </x-col-6>


                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <x-card-title>Button Horizontal</x-card-title>
                            <x-card-subtitle></x-card-subtitle>
                        </x-card-header>
                        <x-card-body class="text-center">
                            <x-list class="list-group-horizontal">
                                <x-list-item>An item</x-list-item>
                                <x-list-item>A second item</x-list-item>
                                <x-list-item>A third item</x-list-item>
                            </x-list>
                            
                        </x-card-body>
                    </x-card>
                </x-col-6>


                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <x-card-title>Contextual classes</x-card-title>
                            <x-card-subtitle></x-card-subtitle>
                        </x-card-header>
                        <x-card-body class="text-center">
                            <x-list>
                                <x-list-item>A simple default list group item</x-list-item>
                                <x-list-item class="list-group-item-primary">A simple primary list group item</x-list-item>
                                <x-list-item class="list-group-item-secondary">A simple secondary list group item</x-list-item>
                                <x-list-item class="list-group-item-success">A simple success list group item</x-list-item>
                                <x-list-item class="list-group-item-danger">A simple danger list group item</x-list-item>
                                <x-list-item class="list-group-item-warning">A simple warning list group item</x-list-item>
                                <x-list-item class="list-group-item-info">A simple info list group item</x-list-item>
                                <x-list-item class="list-group-item-light">A simple light list group item</x-list-item>
                                <x-list-item class="list-group-item-dark">A simple dark list group item</x-list-item>
                            </x-list>
                            
                        </x-card-body>
                    </x-card>
                </x-col-6>
            </x-row>

        </x-container>

    </x-main-content>  
</x-theme>   