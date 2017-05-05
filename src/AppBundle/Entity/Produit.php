<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_29A5EC27AEA34913", columns={"reference"})})
 * @ORM\Entity
 */
class Produit
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
     * @ORM\Column(name="reference", type="string", length=255, nullable=false)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="prixdachat", type="integer", nullable=false)
     */
    private $prixdachat;

    /**
     * @var integer
     *
     * @ORM\Column(name="prixdevente", type="integer", nullable=false)
     */
    private $prixdevente;

    /**
     * @var integer
     *
     * @ORM\Column(name="tauxdeTVA", type="integer", nullable=false)
     */
    private $tauxdetva;



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
     * Set reference
     *
     * @param string $reference
     *
     * @return Produit
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Produit
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set prixdachat
     *
     * @param integer $prixdachat
     *
     * @return Produit
     */
    public function setPrixdachat($prixdachat)
    {
        $this->prixdachat = $prixdachat;

        return $this;
    }

    /**
     * Get prixdachat
     *
     * @return integer
     */
    public function getPrixdachat()
    {
        return $this->prixdachat;
    }

    /**
     * Set prixdevente
     *
     * @param integer $prixdevente
     *
     * @return Produit
     */
    public function setPrixdevente($prixdevente)
    {
        $this->prixdevente = $prixdevente;

        return $this;
    }

    /**
     * Get prixdevente
     *
     * @return integer
     */
    public function getPrixdevente()
    {
        return $this->prixdevente;
    }

    /**
     * Set tauxdetva
     *
     * @param integer $tauxdetva
     *
     * @return Produit
     */
    public function setTauxdetva($tauxdetva)
    {
        $this->tauxdetva = $tauxdetva;

        return $this;
    }

    /**
     * Get tauxdetva
     *
     * @return integer
     */
    public function getTauxdetva()
    {
        return $this->tauxdetva;
    }

    public function __toString() {
        return $this->libelle;
    }
}
