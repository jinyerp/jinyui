<x-jinyui-theme theme="adminkit" class="bootstrap">
    <x-main-content>
        <x-container>
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">                        
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                        	<li class="breadcrumb-item active">Images</li>
                    	</ol>                        
                    
        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Images</h1>
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
                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Responsive images</h5>
                        </x-card-header>
                        <x-card-body>
                            <x-img-res src="/img/avatars/avatar.jpg"/>
                            
                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title"><h5 class="card-title">Image thumbnails</h5></h5>
                        </x-card-header>
                        <x-card-body>
                            <x-img-thumb src="/img/avatars/avatar.jpg" width="140" height="140"/>
                            <x-img-thumb src="/img/avatars/avatar.jpg" class="rounded me-2 mb-2"  alt="Placeholder" width="140" height="140"/>
                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title"><h5 class="card-title">Aligning images</h5></h5>
                        </x-card-header>
                        <x-card-body>
                            <div>
                                <x-img-round src="/img/avatars/avatar.jpg" class="float-start" width="140" height="140"/>
                                <x-img-round src="/img/avatars/avatar.jpg" class="float-end" width="140" height="140"/>
                            </div>
                            <br>
                            <div>
                                <x-img-round src="/img/avatars/avatar.jpg" class="mx-auto d-block" width="140" height="140"/>
                            </div>
                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Images Style</h5>
                            <h6 class="card-subtitle text-muted">Lightweight styles for images.</h6>
                        </x-card-header>
                        <x-card-body class="flex flex-row gap-2">
                            <x-img-round class="me-2 mb-2" src="/img/avatars/avatar.jpg" alt="Placeholder" width="140" height="140"/>
                            <x-img-circle class="me-2 mb-2" src="/img/avatars/avatar.jpg" alt="Placeholder" width="140" height="140"/>

                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Picture</h5>
                            <h6 class="card-subtitle text-muted"></h6>
                        </x-card-header>
                        <x-card-body>
                            <div class="text-center">
                                ​<picture>
                                    <source srcset="..." type="image/svg+xml">
                                    <img src="/img/photos/unsplash-1.jpg" class="img-fluid img-thumbnail" alt="...">
                                </picture>                                
                            </div>
                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Figures</h5>
                            <h6 class="card-subtitle text-muted">Figures는 이미지와 텍스트를 같이 묽어서 출력할 수 있는 UI 기술입니다.</h6>
                        </x-card-header>
                        <x-card-body class="flex flex-row gap-2">
                            <div>
                                <x-figure>
                                    <img src="/img/photos/unsplash-1.jpg" class="figure-img img-fluid rounded" alt="...">
                                    <x-figure-text>
                                        A caption for the above image.
                                    </x-figure-text>
                                </x-figure>                                                             
                            </div>

                            <div>
                                <x-figure>
                                    <img src="/img/photos/unsplash-2.jpg" class="figure-img img-fluid rounded" alt="...">
                                    <x-figure-text class="text-end">
                                        A caption for the above image.
                                    </x-figure-text>                                    
                                </x-figure>                                
                            </div>
                        </x-card-body>
                    </x-card>
                </x-col-6>

            </x-row>
            
        </x-container>
    </x-main-content>

</x-jinyui-theme>   