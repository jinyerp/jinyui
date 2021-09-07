<x-theme theme="adminkit" class="bootstrap">
    <x-main-content>
        <x-container>
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">                        
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                        	<li class="breadcrumb-item active">Card</li>
                    	</ol>                        
                    
        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Groups</h1>
                            <p></p>
                    	</div>
                	</div>
            	</x-col>
        	</x-row>  
        	<!-- end page title -->

            <div class="relative">
                <div class="absolute bottom-4 right-0">
                    <div class="btn-group">
                        <a href="#" class="btn btn-secondary">메뉴얼</a>
                    </div>
                </div>
            </div>

            <x-row>
                <div class="col-12">
                    <div class="card-group mb-4">
                        
                        <div class="card">
                            <img class="card-img-top" src="/img/mockup4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="card-title h5">Card title</div>
                                <p class="card-text">This is a longer card with supporting text below as a
                                    natural lead-in to additional content. This content is a little bit longer.
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>

                        <div class="card">
                            <img class="card-img-top" src="/img/mockup3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="card-title h5">Card title</div>
                                <p class="card-text">This card has supporting text below as a natural lead-in to
                                    additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>

                        <div class="card"><img class="card-img-top" src="/img/mockup1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="card-title h5">Card title</div>
                                <p class="card-text">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. This card has even longer content
                                    than the first to show that equal height action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </x-row>

            <h1 class="h3 mb-3">Layout Grid</h1>
            <p>card 박스를 균일한 격자형태로 배치를 합니다.</p>
            <x-row>
                <x-col-4 class="mb-4">
                    <x-card class="h-100">
                        A
                    </x-card>
                </x-col-4>

                <x-col-4 class="mb-4">
                    <x-card class="h-100">
                        B
                    </x-card>
                </x-col-4>

                <x-col-4 class="mb-4">
                    <x-card class="h-100">
                        C
                    </x-card>
                </x-col-4>

                <x-col-4 class="mb-4">
                    <x-card class="h-100">
                        D
                    </x-card>
                </x-col-4>

                <x-col-4 class="mb-4">
                    <x-card class="h-100">
                        E
                    </x-card>
                </x-col-4>

                <x-col-4 class="mb-4">
                    <x-card class="h-100">
                        F
                    </x-card>
                </x-col-4>

                <x-col-4 class="mb-4">
                    <x-card class="h-100">
                        G
                    </x-card>
                </x-col-4>

            </x-row>



        </x-container>
    </x-main-content>
</x-theme>
