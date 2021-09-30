<?php

namespace App\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

class CsseCovid19DailyReportDTO
{
    /**
     * @SerializedName("FIPS")
     */
    private $fips;

    /**
     * @SerializedName("Admin2")
     */
    private $admin2;

    /**
     * @SerializedName("Province_State")
     * @SerializedName("Province/State")
     */
    private $provinceState;

    /**
     * @SerializedName("Country_Region")
     * @SerializedName("Country/Region")
     */
    private $countryRegion;

    /**
     * @SerializedName("Last_Update")
     * @SerializedName("Last Update")
     */
    private $lastUpdate;

    /**
     * @SerializedName("Lat")
     */
    private $lat;

    /**
     * @SerializedName("Long_")
     */
    private $longField;

    /**
     * @SerializedName("Confirmed")
     */
    private $confirmed;

    /**
     * @SerializedName("Deaths")
     */
    private $deathes;

    /**
     * @SerializedName("Recovered")
     */
    private $recovered;

    /**
     * @SerializedName("Active")
     */
    private $active;

    /**
     * @SerializedName("Combined_Key")
     */
    private $combinedKey;

    /**
     * @SerializedName("Incident_Rate")
     */
    private $incidentRate;

    /**
     * @SerializedName("Case_Fatality_Ratio")
     */
    private $caseFatalityRatio;

    public function getFips()
    {
        return $this->fips;
    }

    public function setFips($fips): self
    {
        $this->fips = $fips;

        return $this;
    }

    public function getAdmin2()
    {
        return $this->admin2;
    }

    public function setAdmin2($admin2): self
    {
        $this->admin2 = $admin2;

        return $this;
    }

    public function getProvinceState()
    {
        return $this->provinceState;
    }

    public function setProvinceState($provinceState): self
    {
        $this->provinceState = $provinceState;

        return $this;
    }

    public function getCountryRegion()
    {
        return $this->countryRegion;
    }

    public function setCountryRegion($countryRegion): self
    {
        $this->countryRegion = $countryRegion;

        return $this;
    }

    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    public function setLastUpdate($lastUpdate): self
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    public function getLat()
    {
        return $this->lat;
    }

    public function setLat($lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLongField()
    {
        return $this->longField;
    }

    public function setLongField($longField): self
    {
        $this->longField = $longField;

        return $this;
    }

    public function getConfirmed()
    {
        return $this->confirmed;
    }

    public function setConfirmed($confirmed): self
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    public function getDeathes()
    {
        return $this->deathes;
    }

    public function setDeathes($deathes): self
    {
        $this->deathes = $deathes;

        return $this;
    }

    public function getRecovered()
    {
        return $this->recovered;
    }

    public function setRecovered($recovered): self
    {
        $this->recovered = $recovered;

        return $this;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getCombinedKey()
    {
        return $this->combinedKey;
    }

    public function setCombinedKey($combinedKey): self
    {
        $this->combinedKey = $combinedKey;

        return $this;
    }

    public function getIncidentRate()
    {
        return $this->incidentRate;
    }

    public function setIncidentRate($incidentRate): self
    {
        $this->incidentRate = $incidentRate;

        return $this;
    }

    public function getCaseFatalityRatio()
    {
        return $this->caseFatalityRatio;
    }

    public function setCaseFatalityRatio($caseFatalityRatio): self
    {
        $this->caseFatalityRatio = $caseFatalityRatio;

        return $this;
    }
}
