<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Enrollment;
use App\Models\Course;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        
            $data = [
                'Nav_enrollments' => Enrollment::get(),
                'Nav_Categories' => Category::get(),
                'Nav_courses' => Course::get()
            ];

            view::share($data);
        //
    }
}
