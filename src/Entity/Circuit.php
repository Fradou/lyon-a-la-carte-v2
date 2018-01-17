<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
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
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string", name="cir_name", nullable=true)
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="string", name="cir_category", nullable=true)
     * @var string
     */
    private $category;

    /**
     * @ORM\Column(type="text", name="cir_description", nullable=true)
     * @var string
     */
    private $description;

    /**
     * @ORM\Column(type="float", name="cir_cost", nullable=true)
     * @var float
     */
    private $cost;

    /**
     * @ORM\Column(type="integer", name="cir_total_step")
     * @var int
     */
    private $totalStep;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Position", mappedBy="circuit")
     * @var Position[]|Collection
     */
    private $positions;

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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     */
    public function setCost(float $cost)
    {
        $this->cost = $cost;
    }

    /**
     * @return int
     */
    public function getTotalStep(): int
    {
        return $this->totalStep;
    }

    /**
     * @param int $totalStep
     */
    public function setTotalStep(int $totalStep)
    {
        $this->totalStep = $totalStep;
    }

    /**
     * @return Position[]|Collection
     */
    public function getPositions(): Collection
    {
        return $this->positions;
    }

    /**
     * @param Position[]|Collection $positions
     */
    public function setPositions($positions)
    {
        $this->positions = $positions;
    }
}
