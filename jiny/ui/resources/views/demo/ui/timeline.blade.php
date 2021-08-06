<x-theme theme="adminkit" class="bootstrap">
    <x-main-content>
        <x-container>
            <h1 class="h3">TimeLine</h1>

            <x-row>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h4 class="header-title">Json Data</h4>
                            <p class="text-muted font-14">
                                지니UI는 json 데이터릴 이용하여 Timeline 을 쉽게 구현할 수 있습니다. jsondata는 직접 코드에 삽입 또는 외부의 데이터베이스에서 받아서 동적으로 구현할 수 있습니다.
                                code탭을 클릭하시면 작성한 html소스 코드를 보실 수 있습니다.
                            </p>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="nav-bordered mb-3">
                                <x-navtab-item class="show active" >
                                    <x-navtab-link class="rounded-0 active">
                                        Preview
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div class="basic">
                                        @include("jinyui::demo.ui.timelines.jsondata")
                                    </div>
                                    
                                </x-navtab-item>
                            
                                <x-navtab-item >
                                    <x-navtab-link class="rounded-0">
                                        Code
                                    </x-navtab-link> 
                                    code...
                                </x-navtab-item>
                            
                                <x-navtab-item >
                                    <x-navtab-link class="rounded-0">
                                        Description
                                    </x-navtab-link> 
                                    description...
                                </x-navtab-item>                            
                            </x-navtab>

                            
                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h4 class="header-title">구) HTML 코드 예시</h4>
                            <p class="text-muted font-14">
                                순수한 HTML 코드를 이용하여 구한한 Timeline 입니다. code탭을 클릭하시면 작성한 html소스 코드를 보실 수 있습니다.
                            </p>
                        </x-card-header>
                        <x-card-body>

                            <x-navtab class="nav-bordered mb-3">
                                <x-navtab-item class="show active" >
                                    <x-navtab-link class="rounded-0 active">
                                        Preview
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div class="basic">
                                        @include("jinyui::demo.ui.timelines.basic")
                                    </div>
                                    
                                </x-navtab-item>
                            
                                <x-navtab-item >
                                    <x-navtab-link class="rounded-0">
                                        Code
                                    </x-navtab-link> 
                                    code...
                                </x-navtab-item>
                            
                                <x-navtab-item >
                                    <x-navtab-link class="rounded-0">
                                        Description
                                    </x-navtab-link> 
                                    description...
                                </x-navtab-item>                            
                            </x-navtab>
                            
                        </x-card-body>
                    </x-card>
                </x-col-6>

            </x-row>

            <x-row>
                <x-col>
                    <x-card>
                        <x-card-header>
                            <h4 class="header-title">Center</h4>
                            <p class="text-muted font-14">
                                중앙 타임라인을 기준으로 좌/우에 시간이력을 출력합니다.
                            </p>
                        </x-card-header>
                        <x-card-body>

                            <x-navtab class="nav-bordered mb-3">
                                <x-navtab-item class="show active" >
                                    <x-navtab-link class="rounded-0 active">
                                        Preview
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div class="hyper">
                                        @include("jinyui::demo.ui.timelines.center")
                                    </div>
                                    
                                </x-navtab-item>
                            
                                <x-navtab-item >
                                    <x-navtab-link class="rounded-0">
                                        Code
                                    </x-navtab-link> 
                                    code...
                                </x-navtab-item>
                            
                                <x-navtab-item >
                                    <x-navtab-link class="rounded-0">
                                        Description
                                    </x-navtab-link> 
                                    description...
                                </x-navtab-item>                            
                            </x-navtab>

                            
                            
                        </x-card-body>
                    </x-card>
                </x-col>                
            </x-row>
        </x-container>
    </x-main-content>
</x-theme>