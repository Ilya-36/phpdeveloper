<?php

namespace App\Http\Repositories;


use Illuminate\Support\Collection;

interface ApartmentRepositoryInterface
{
    public function searchApartments(): Collection;
}
