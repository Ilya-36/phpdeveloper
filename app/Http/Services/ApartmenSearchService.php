<?php

namespace App\Http\Services;

use App\Http\DTO\ApartmentSearchDTO;
use App\Http\Repositories\ApartmentRepositoryInterface;
use Illuminate\Support\Collection;

class ApartmenSearchService
{
    private $aparmentRepository;

    public function __construct(ApartmentRepositoryInterface $apartmentRepository)
    {
        $this->aparmentRepository = $apartmentRepository;
    }

    public function search(ApartmentSearchDTO $apartmentSearchDTO) : Collection
    {
        return $this->aparmentRepository->searchApartments($apartmentSearchDTO);
    }
}
