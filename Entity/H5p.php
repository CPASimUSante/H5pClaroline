<?php

namespace CPASimUSante\H5pClarolineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * H5p
 *
 * @ORM\Table(name="cpasimusante__h5p")
 * @ORM\Entity(repositoryClass="CPASimUSante\H5pClarolineBundle\Repository\H5pRepository")
 */
class H5p
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
