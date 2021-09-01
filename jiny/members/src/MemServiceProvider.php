<?php

namespace Jiny\Members;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;
use Livewire\Livewire;

use Illuminate\Support\Facades\View;
use Laravel\Fortify\Fortify;

class MemServiceProvider extends ServiceProvider
{
    private $package = "jinymem";
    public function boot()
    {
        // 모듈: 라우트 설정
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', $this->package);

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->configureComponents();

        // Fortify 설정
        /*
        Fortify::registerView(function () {
            return view("jinymem::auth.register");
        });

        Fortify::loginView(function () {
            return view("auth.login");
        });
        */

    }

    public function register()
    {
        /* 라이브와이어 컴포넌트 등록 */
        $this->app->afterResolving(BladeCompiler::class, function () {

        });
    }

    protected function configureComponents()
    {
        /* 컴포넌트 클래스 등록 */
        $this->loadViewComponentsAs($this->package, [

        ]);

    }

}
