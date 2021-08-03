<style>
.tab-content>.tab-pane {
    display: none
}

.tab-content>.active {
    display: block
}
</style>
<x-theme theme="adminkit" class="bootstrap">
    <x-main-content>
        <x-container>
            <h1 class="h3 mb-3">Settings</h1>

            <x-row>
                <div class="col-12 col-md-3 col-xl-2">
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title mb-0">Profile Settings</h5>
                        </x-card-header>

                        <x-jinyui::tab.flush>
                            {{ BootTab()->links(
                                [
                                    'account'=>"Account", 
                                    'passowrd'=>"password",
                                    '#1'=>"Privacy and safety",
                                    '#2'=>"Email notifications",
                                    '#3'=>"Web notifications",
                                    '#4'=>"Widgets",
                                    '#5'=>"Your data",
                                    '#6'=>"Delete account",
                                ],
                                "account") }}
                        </x-jinyui::tab.flush>
                    </x-card>
                </div>

                <div class="col-12 col-md-9 col-xl-10">

                    {{-- 텝출력--}}
                    <x-jinyui::tab.contents>
                        {{-- 텝 컨덴츠 생성--}}
                        <x-jinyui::tab.item class="active show" id="account">
                            @include('jinyui::demo.pages.page.settings.tab-account')                            
                        </x-jinyui::tab.item>

                        {{-- 텝 컨덴츠 생성--}}
                        <x-jinyui::tab.item id="password">                        
                            @include('jinyui::demo.pages.page.settings.tab-password')
                        </x-jinyui::tab.item>
                    </x-jinyui::tab.contents>
                    
                </div>
            </x-row>
        </x-container>
    </x-main-content>

</x-theme>   