<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LocationRepository")
 * @ORM\Table(name="t_location_loc")
 */
class Location
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="loc_id")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string", name="loc_type")
     * @var string
     */
    private $type;

    /**
     * @ORM\Column(type="string", name="loc_type_detail", nullable=true)
     * @var string
     */
    private $typeDetail;

    /**
     * @ORM\Column(type="string", name="loc_name", nullable=true)
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="text", name="loc_address", nullable=true)
     * @var string
     */
    private $address;

    /**
     * @ORM\Column(type="string", name="loc_postal_code", nullable=true)
     * @var string
     */
    private $postalCode;

    /**
     * @ORM\Column(type="string", name="loc_town", nullable=true)
     * @var string
     */
    private $town;

    /**
     * @ORM\Column(type="string", name="loc_phone", nullable=true)
     * @var string
     */
    private $phone;

    /**
     * @ORM\Column(type="string", name="loc_mail", nullable=true)
     * @var string
     */
    private $mail;

    /**
     * @ORM\Column(type="string", name="loc_website", nullable=true)
     * @var string
     */
    private $website;

    /**
     * @ORM\Column(type="string", name="loc_facebook", nullable=true)
     * @var string
     */
    private $facebook;

    /**
     * @ORM\Column(type="string", name="loc_rank", nullable=true)
     * @var string
     */
    private $rank;

    /**
     * @ORM\Column(type="text", name="loc_open_hour", nullable=true)
     * @var string
     */
    private $openHour;

    /**
     * @ORM\Column(type="text", name="loc_rate_clear", nullable=true)
     * @var string
     */
    private $rateClear;

    /**
     * @ORM\Column(type="string", name="loc_min_rate", nullable=true)
     * @var string
     */
    private $minRate;

    /**
     * @ORM\Column(type="string", name="loc_max_rate", nullable=true)
     * @var string
     */
    private $maxRate;

    /**
     * @ORM\Column(type="string", name="loc_producer", nullable=true)
     * @var string
     */
    private $producer;

    /**
     * @ORM\Column(type="string", name="loc_latitude", nullable=true)
     * @var string
     */
    private $latitude;

    /**
     * @ORM\Column(type="string", name="loc_longitude", nullable=true)
     * @var string
     */
    private $longitude;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Position", mappedBy="location")
     * @var Collection|Position[]
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
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getTypeDetail(): string
    {
        return $this->typeDetail;
    }

    /**
     * @param string $typeDetail
     */
    public function setTypeDetail(string $typeDetail)
    {
        $this->typeDetail = $typeDetail;
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
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode(string $postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string
     */
    public function getTown(): string
    {
        return $this->town;
    }

    /**
     * @param string $town
     */
    public function setTown(string $town)
    {
        $this->town = $town;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail(string $mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function getWebsite(): string
    {
        return $this->website;
    }

    /**
     * @param string $website
     */
    public function setWebsite(string $website)
    {
        $this->website = $website;
    }

    /**
     * @return string
     */
    public function getFacebook(): string
    {
        return $this->facebook;
    }

    /**
     * @param string $facebook
     */
    public function setFacebook(string $facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * @return string
     */
    public function getRank(): string
    {
        return $this->rank;
    }

    /**
     * @param string $rank
     */
    public function setRank(string $rank)
    {
        $this->rank = $rank;
    }

    /**
     * @return string
     */
    public function getOpenHour(): string
    {
        return $this->openHour;
    }

    /**
     * @param string $openHour
     */
    public function setOpenHour(string $openHour)
    {
        $this->openHour = $openHour;
    }

    /**
     * @return string
     */
    public function getRateClear(): string
    {
        return $this->rateClear;
    }

    /**
     * @param string $rateClear
     */
    public function setRateClear(string $rateClear)
    {
        $this->rateClear = $rateClear;
    }

    /**
     * @return string
     */
    public function getMinRate(): string
    {
        return $this->minRate;
    }

    /**
     * @param string $minRate
     */
    public function setMinRate(string $minRate)
    {
        $this->minRate = $minRate;
    }

    /**
     * @return string
     */
    public function getMaxRate(): string
    {
        return $this->maxRate;
    }

    /**
     * @param string $maxRate
     */
    public function setMaxRate(string $maxRate)
    {
        $this->maxRate = $maxRate;
    }

    /**
     * @return string
     */
    public function getProducer(): string
    {
        return $this->producer;
    }

    /**
     * @param string $producer
     */
    public function setProducer(string $producer)
    {
        $this->producer = $producer;
    }

    /**
     * @return string
     */
    public function getLatitude(): string
    {
        return $this->latitude;
    }

    /**
     * @param string $latitude
     */
    public function setLatitude(string $latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return string
     */
    public function getLongitude(): string
    {
        return $this->longitude;
    }

    /**
     * @param string $longitude
     */
    public function setLongitude(string $longitude)
    {
        $this->longitude = $longitude;
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
