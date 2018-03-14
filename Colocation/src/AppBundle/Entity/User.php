<?php

namespace AppBundle\Entity;
use FOS\UserBundle\Model\User as BaseUSer;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class User
 *
 * @package AppBudle\Entity
 * 
 * @ORM\Entity
 * @ORM\Table(name="`user`")
 */
class User extends BaseUser{
    /**
     * @var integer
     * 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct(){
        parent::__construct();
    }
}
