<?php

namespace App\Entity;

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
     */
    private $id;

    /**
     * @ORM\Column(type="string", name="loc_type")
     */
    private $type;

    /**
     * @ORM\Column(type="string", name="loc_type_detail", nullable=true)
     */
    private $typeDetail;

    /**
     * @ORM\Column(type="string", name="loc_name", nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="text", name="loc_address", nullable=true)
     */
    private $address;

    /**
     * @ORM\Column(type="string", name="loc_postal_code", nullable=true)
     */
    private $postalCode;

    /**
     * @ORM\Column(type="string", name="loc_town", nullable=true)
     */
    private $town;

    /**
     * @ORM\Column(type="string", name="loc_phone", nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", name="loc_mail", nullable=true)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", name="loc_website", nullable=true)
     */
    private $website;

    /**
     * @ORM\Column(type="string", name="loc_facebook", nullable=true)
     */
    private $facebook;

    /**
     * @ORM\Column(type="string", name="loc_rank", nullable=true)
     */
    private $rank;

    /**
     * @ORM\Column(type="text", name="loc_open_hour", nullable=true)
     */
    private $openHour;

    /**
     * @ORM\Column(type="text", name="loc_rate_clear", nullable=true)
     */
    private $rateClear;

    /**
     * @ORM\Column(type="string", name="loc_min_rate", nullable=true)
     */
    private $minRate;

    /**
     * @ORM\Column(type="string", name="loc_max_rate", nullable=true)
     */
    private $maxRate;

    /**
     * @ORM\Column(type="string", name="loc_producer", nullable=true)
     */
    private $producer;

    /**
     * @ORM\Column(type="string", name="loc_latitude", nullable=true)
     */
    private $latitude;

    /**
     * @ORM\Column(type="string", name="loc_longitude", nullable=true)
     */
    private $longitude;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Position", mappedBy="location")
     */
    private $positions;

}
