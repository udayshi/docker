<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lowe\PingBundle\Entity\AbstractUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User extends AbstractUser
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
     * Get id
     *
     * @return integer
     */
    public function getId():int
    {
        return $this->id;
    }
}
