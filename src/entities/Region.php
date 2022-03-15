<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="regions")
 */
class Region
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
    private $nomRegion;
    /**
     * One region has many departements. This is the inverse side.
     * @OneToMany(targetEntity="Departement", mappedBy="region")
     */
    private $departements;

    public function __construct()
    {
        $this->departements = new ArrayCollection();
    }


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
     * Get the value of nomRegion
     */
    public function getNomRegion()
    {
        return $this->nomRegion;
    }

    /**
     * Set the value of nomRegion
     *
     * @return  self
     */
    public function setNomRegion($nomRegion)
    {
        $this->nomRegion = $nomRegion;

        return $this;
    }

    /**
     * Get the value of departements
     */
    public function getDepartements()
    {
        return $this->departements;
    }

    /**
     * Set the value of departements
     *
     * @return  self
     */
    public function setDepartements($departements)
    {
        $this->departements = $departements;

        return $this;
    }
}
