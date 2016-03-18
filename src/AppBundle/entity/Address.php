<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity
 * @UniqueEntity("id")
 *
 */
class Address
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string")
     *
     */
    private $alias;
    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string")
     *
     */
    private $street;
    /**
     * @var string
     *
     * @ORM\Column(name="no", type="string")
     *
     */
    private $no;
    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string")
     *
     */
    private $city;
    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string")
     *
     */
    private $country;
    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string")
     *
     */
    private $phone;
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string")
     *
     */
    private $email;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Partner", inversedBy="addresses")
     *
     */

    private $partner;


    /**
     * @var string
     *
     * @ORM\Column(name="bank", type="string")
     *
     */
    private $bank;
    /**
     * @var string
     *
     * @ORM\Column(name="iban", type="string")
     *
     */
    private $iban;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dat_cre", type="datetime")
     */
    private $datCre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dat_upd", type="datetime")
     */
    private $datUpd;

}