<?php

namespace Gestor\GestoriaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuari
 *
 * @ORM\Table(name="usuari", indexes={@ORM\Index(name="fk_subtasca", columns={"subtasca"})})
 * @ORM\Entity
 */
class Usuari
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
     * @ORM\Column(name="dni", type="text", length=65535, nullable=false)
     */
    private $dni;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="cognoms", type="text", length=65535, nullable=false)
     */
    private $cognoms;

    /**
     * @var \Subtasca
     *
     * @ORM\ManyToOne(targetEntity="Subtasca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="subtasca", referencedColumnName="id")
     * })
     */
    private $subtasca;



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
     * Set dni
     *
     * @param string $dni
     *
     * @return Usuari
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Usuari
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
     * Set cognoms
     *
     * @param string $cognoms
     *
     * @return Usuari
     */
    public function setCognoms($cognoms)
    {
        $this->cognoms = $cognoms;

        return $this;
    }

    /**
     * Get cognoms
     *
     * @return string
     */
    public function getCognoms()
    {
        return $this->cognoms;
    }

    /**
     * Set subtasca
     *
     * @param \Gestor\GestoriaBundle\Entity\Subtasca $subtasca
     *
     * @return Usuari
     */
    public function setSubtasca(\Gestor\GestoriaBundle\Entity\Subtasca $subtasca = null)
    {
        $this->subtasca = $subtasca;

        return $this;
    }

    /**
     * Get subtasca
     *
     * @return \Gestor\GestoriaBundle\Entity\Subtasca
     */
    public function getSubtasca()
    {
        return $this->subtasca;
    }
}
