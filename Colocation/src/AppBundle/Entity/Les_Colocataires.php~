<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Les_Colocataires
 *
 * @ORM\Table(name="les__colocataires")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Les_ColocatairesRepository")
 */
class Les_Colocataires
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Annonces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $annonce;
    /**
     * @var int
     *
     * @ORM\Column(name="idUser", type="integer")
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="IdColoc", type="integer")
     */
    private $idColoc;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Les_Colocataires
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idColoc
     *
     * @param integer $idColoc
     *
     * @return Les_Colocataires
     */
    public function setIdColoc($idColoc)
    {
        $this->idColoc = $idColoc;

        return $this;
    }

    /**
     * Get idColoc
     *
     * @return int
     */
    public function getIdColoc()
    {
        return $this->idColoc;
    }

    /**
     * Set annonce
     *
     * @param \AppBundle\Entity\Annonces $annonce
     *
     * @return Les_Colocataires
     */
    public function setAnnonce(\AppBundle\Entity\Annonces $annonce)
    {
        $this->annonce = $annonce;

        return $this;
    }

    /**
     * Get annonce
     *
     * @return \AppBundle\Entity\Annonces
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }
}
