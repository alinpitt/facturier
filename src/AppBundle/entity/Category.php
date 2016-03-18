<?php
 
namespace AppBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
 
/**
 * @ORM\Table()
 * @ORM\Entity
 * @UniqueEntity("name")
 */
class Category
{
/**
 * @var integer
 * @ORM\Column(name="id", type="integer")
 * @ORM\Id
 * @ORM\GeneratedValue()
 */
private $id;
/**
 *
 * @var string
 * @ORM\ManyToMany(targetEntity="Product", mappedBy="categories")
 */
private $products;
/**
 * @var string
 * @ORM\Column(name="name", type="string")
 */
private $name;
/**
 *
 * @var \DateTime
 * @ORM\Column(name="dat_upd", type="datetime")
 */
private $datUpd;
/**
 * @var \DateTime
 *
 * @ORM\Column(name="dat_cre", type="datetime")
*/
private $datCre;
}