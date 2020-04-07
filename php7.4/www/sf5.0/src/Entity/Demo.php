<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\DemoReference;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DemoRepository")
 */
class Demo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;


    /**
     * @var $reference
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\DemoReference", inversedBy="reference")
     */
    private $reference;




    /**
     * Set reference
     *
     * @param \App\Entity\DemoReference $ref
     *
     * @return DemoReference
     */
    public function setRefrence(\App\Entity\DemoReference $reference = null)
    {
        $this->reference = $reference;

        return $this;
    }
    /**
     * @return \App\Entity\DemoReference
     */
    public function getReference()
    {
        return $this->reference;
    }







    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }


}
