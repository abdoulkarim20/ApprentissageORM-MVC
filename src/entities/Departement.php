<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
/**
 * @ORM\Entity
 * @ORM\Table(name="departements")
 */
class Departement
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $nomDepartement;
    /**
     * Many departements have one region. This is the owning side.
     * @ManyToOne(targetEntity="Region", inversedBy="departements")
     * @JoinColumn(name="region_id", referencedColumnName="id")
     */
    private $region;
    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nomDepartement
     */
    public function getNomDepartement()
    {
        return $this->nomDepartement;
    }

    /**
     * Set the value of nomDepartement
     *
     * @return  self
     */
    public function setNomDepartement($nomDepartement)
    {
        $this->nomDepartement = $nomDepartement;

        return $this;
    }

    /**
     * Get the value of region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set the value of region
     *
     * @return  self
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }
}
