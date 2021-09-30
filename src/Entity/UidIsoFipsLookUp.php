<?php

namespace App\Entity;

use App\Repository\UidIsoFipsLookUpRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UidIsoFipsLookUpRepository::class)
 */
class UidIsoFipsLookUp
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $uid;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $iso2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $iso3;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $code3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fips;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Admin2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $provinceState;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $countryRegion;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $lat;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $longField;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $combinedKey;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $population;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUid(): ?int
    {
        return $this->uid;
    }

    public function setUid(?int $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    public function getIso2(): ?string
    {
        return $this->iso2;
    }

    public function setIso2(?string $iso2): self
    {
        $this->iso2 = $iso2;

        return $this;
    }

    public function getIso3(): ?string
    {
        return $this->iso3;
    }

    public function setIso3(?string $iso3): self
    {
        $this->iso3 = $iso3;

        return $this;
    }

    public function getCode3(): ?int
    {
        return $this->code3;
    }

    public function setCode3(?int $code3): self
    {
        $this->code3 = $code3;

        return $this;
    }

    public function getFips(): ?string
    {
        return $this->fips;
    }

    public function setFips(?string $fips): self
    {
        $this->fips = $fips;

        return $this;
    }

    public function getAdmin2(): ?string
    {
        return $this->Admin2;
    }

    public function setAdmin2(?string $Admin2): self
    {
        $this->Admin2 = $Admin2;

        return $this;
    }

    public function getProvinceState(): ?string
    {
        return $this->provinceState;
    }

    public function setProvinceState(?string $provinceState): self
    {
        $this->provinceState = $provinceState;

        return $this;
    }

    public function getCountryRegion(): ?string
    {
        return $this->countryRegion;
    }

    public function setCountryRegion(?string $countryRegion): self
    {
        $this->countryRegion = $countryRegion;

        return $this;
    }

    public function getLat(): ?float
    {
        return $this->lat;
    }

    public function setLat(?float $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLongField(): ?float
    {
        return $this->longField;
    }

    public function setLongField(?float $longField): self
    {
        $this->longField = $longField;

        return $this;
    }

    public function getCombinedKey(): ?string
    {
        return $this->combinedKey;
    }

    public function setCombinedKey(?string $combinedKey): self
    {
        $this->combinedKey = $combinedKey;

        return $this;
    }

    public function getPopulation(): ?int
    {
        return $this->population;
    }

    public function setPopulation(?int $population): self
    {
        $this->population = $population;

        return $this;
    }
}
