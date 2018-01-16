<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CircuitRepository")
 * @ORM\Table(name="t_circuit_cir")
 */
class Circuit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="cir_id")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Position", mappedBy="circuit")
     */
    private $positions;
}
