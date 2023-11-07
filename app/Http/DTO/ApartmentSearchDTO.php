<?php

declare(strict_types=1);

namespace App\Http\DTO;

class ApartmentSearchDTO
{
    private ?string $name;
    private ?int $badrooms;

    /**
     * @param string $name
     * @param int $badrooms
     */
    public function __construct(?string $name, ?int $badrooms)
    {
        $this->name = $name;
        $this->badrooms = $badrooms;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return int|null
     */
    public function getBadrooms(): ?int
    {
        return $this->badrooms;
    }
}
