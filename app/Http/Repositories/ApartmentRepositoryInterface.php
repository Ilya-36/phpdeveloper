<?php

namespace App\Http\Repositories;


use App\Http\DTO\ApartmentSearchDTO;
use Illuminate\Support\Collection;

interface ApartmentRepositoryInterface
{
    public function searchApartments(ApartmentSearchDTO $apartmentSearchDTO): Collection;
}
