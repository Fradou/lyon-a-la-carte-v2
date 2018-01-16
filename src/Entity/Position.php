<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PositionRepository")
 * @ORM\Table(name="t_position_pos")
 */
class Position
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="pos_id")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", name="pos_step")
     * @var integer
     */
    private $step;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Location", inversedBy="positions")
     * @ORM\JoinColumn(name="loc_id",referencedColumnName="loc_id", nullable=false)
     */
    private $location;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Circuit", inversedBy="circuits")
     * @ORM\JoinColumn(name="cir_id",referencedColumnName="cir_id", nullable=false)
     */
    private $circuit;
}
