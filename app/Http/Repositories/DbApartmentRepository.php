<?php

namespace App\Http\Repositories;

use App\Http\DTO\ApartmentSearchDTO;
use App\Models\Apartment;
use Illuminate\Support\Collection;

class DbApartmentRepository implements ApartmentRepositoryInterface
{
    private Apartment $apartment;
    public function __construct(Apartment $apartment)
    {
        $this->apartment = $apartment;
    }

    public function searchApartments(ApartmentSearchDTO $apartmentSearchDTO): Collection
    {
        // тут реализовать логику с помощью модели Apartment

        return $this->apartment::all();
        // TODO: Implement searchApartments() method.
    }
}
