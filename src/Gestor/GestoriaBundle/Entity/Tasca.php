<?php

namespace Gestor\GestoriaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tasca
 *
 * @ORM\Table(name="tasca")
 * @ORM\Entity
 */
class Tasca
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcio", type="text", length=65535, nullable=false)
     */
    private $descripcio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inici", type="date", nullable=false)
     */
    private $dataInici;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_fi", type="date", nullable=false)
     */
    private $dataFi;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Tasca
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set descripcio
     *
     * @param string $descripcio
     *
     * @return Tasca
     */
    public function setDescripcio($descripcio)
    {
        $this->descripcio = $descripcio;

        return $this;
    }

    /**
     * Get descripcio
     *
     * @return string
     */
    public function getDescripcio()
    {
        return $this->descripcio;
    }

    /**
     * Set dataInici
     *
     * @param \DateTime $dataInici
     *
     * @return Tasca
     */
    public function setDataInici($dataInici)
    {
        $this->dataInici = $dataInici;

        return $this;
    }

    /**
     * Get dataInici
     *
     * @return \DateTime
     */
    public function getDataInici()
    {
        return $this->dataInici;
    }

    /**
     * Set dataFi
     *
     * @param \DateTime $dataFi
     *
     * @return Tasca
     */
    public function setDataFi($dataFi)
    {
        $this->dataFi = $dataFi;

        return $this;
    }

    /**
     * Get dataFi
     *
     * @return \DateTime
     */
    public function getDataFi()
    {
        return $this->dataFi;
    }
}
