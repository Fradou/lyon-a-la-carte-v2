<?php
declare(strict_types=1);

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
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="integer", name="pos_step")
     * @var int
     */
    private $step;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Location", inversedBy="positions")
     * @ORM\JoinColumn(name="loc_id",referencedColumnName="loc_id", nullable=false)
     * @var Location
     */
    private $location;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Circuit", inversedBy="circuits")
     * @ORM\JoinColumn(name="cir_id",referencedColumnName="cir_id", nullable=false)
     * @var Circuit
     */
    private $circuit;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getStep(): int
    {
        return $this->step;
    }

    /**
     * @param int $step
     */
    public function setStep(int $step)
    {
        $this->step = $step;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @param Location $location
     */
    public function setLocation(Location $location)
    {
        $this->location = $location;
    }

    /**
     * @return Circuit
     */
    public function getCircuit(): Circuit
    {
        return $this->circuit;
    }

    /**
     * @param Circuit $circuit
     */
    public function setCircuit(Circuit $circuit)
    {
        $this->circuit = $circuit;
    }


}
