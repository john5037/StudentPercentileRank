<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\StudentService;
use App\Repositories\StudentRepository;

class StudentProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       // Bind The Contract For Specefic Service File
      $this->app->bind('App\Contracts\StudentContract', function ($app) {
        return new StudentService(new StudentRepository());
      });    
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
   
    }
	
	/**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['App\Contracts\StudentContract'];
    }
}
