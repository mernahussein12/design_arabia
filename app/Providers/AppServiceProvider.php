<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $services=DB::table('services')->get();
        View::share('services',$services);
        $services_cat=DB::table('category_services')->get();
        View::share('services_cat',$services_cat);

        $homesliders=DB::table('sliders')->where('position_id',6)->get();
        View::share('homesliders',$homesliders);

        $missions =DB::table('missions')->get();
        View::share('missions',$missions);

        $projects =DB::table('projects')->get();
        View::share('projects',$projects);

        $blogs = DB::table('blogs')->get();
        View::share('blogs', $blogs);

        $team = DB::table('teams')->get();
        View::share('teams', $team);

        $galleries = DB::table('galleries')->get();
        View::share('galleries', $galleries);

        $galleries_cat = DB::table('category_galleries')->get();
        View::share('galleries_cat',  $galleries_cat);

        $clients = DB::table('clients')->get();
        View::share('clients', $clients);

        $abouts =DB::table('abouts')->get();
        View::share('abouts',$abouts);

        $approaches =DB::table('approaches')->get();
        View::share('approaches',$approaches);
    }
}
