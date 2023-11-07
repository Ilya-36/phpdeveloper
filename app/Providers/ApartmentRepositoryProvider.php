<?php

namespace App\Providers;

use App\Http\Repositories\ApartmentRepositoryInterface;
use App\Http\Repositories\DbApartmentRepository;
use Illuminate\Support\ServiceProvider;

class ApartmentRepositoryProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->bind(ApartmentRepositoryInterface::class, DbApartmentRepository::class);
    }
}
