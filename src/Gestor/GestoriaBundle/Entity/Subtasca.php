<?php

namespace Gestor\GestoriaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subtasca
 *
 * @ORM\Table(name="subtasca", indexes={@ORM\Index(name="fk_tasca", columns={"tasca"})})
 * @ORM\Entity
 */
class Subtasca
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
     * @var \Tasca
     *
     * @ORM\ManyToOne(targetEntity="Tasca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tasca", referencedColumnName="id")
     * })
     */
    private $tasca;



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
     * @return Subtasca
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
     * Set tasca
     *
     * @param \Gestor\GestoriaBundle\Entity\Tasca $tasca
     *
     * @return Subtasca
     */
    public function setTasca(\Gestor\GestoriaBundle\Entity\Tasca $tasca = null)
    {
        $this->tasca = $tasca;

        return $this;
    }

    /**
     * Get tasca
     *
     * @return \Gestor\GestoriaBundle\Entity\Tasca
     */
    public function getTasca()
    {
        return $this->tasca;
    }
}
