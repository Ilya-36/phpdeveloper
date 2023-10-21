<?php

namespace App\Http\Repositories;

use App\Models\Apartment;
use Illuminate\Support\Collection;

class DbApartmentRepository implements ApartmentRepositoryInterface
{
    private  $apartment;
    public function __construct(Apartment $apartment)
    {
        $this->apartment = $apartment;
    }
    public function searchApartments(): Collection
    {
        return $this->apartment::all();
        // TODO: Implement searchApartments() method.
    }
}
