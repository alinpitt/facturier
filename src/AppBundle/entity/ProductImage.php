<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * address
 *
 * @ORM\Table(name="productimge")
 * @ORM\Entity
 * @UniqueEntity("name")
 *
 */
class ProductImage
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
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string")
     *
     */
    private $path;
    /**
     *
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="images")
     *
     */

    private $products;

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