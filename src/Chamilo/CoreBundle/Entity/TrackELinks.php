<?php

namespace Chamilo\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrackELinks
 *
 * @ORM\Table(name="track_e_links", indexes={@ORM\Index(name="links_user_id", columns={"links_user_id"}), @ORM\Index(name="links_session_id", columns={"links_session_id"})})
 * @ORM\Entity
 */
class TrackELinks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="links_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $linksId;

    /**
     * @var integer
     *
     * @ORM\Column(name="links_user_id", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $linksUserId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="links_date", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $linksDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="c_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $cId;

    /**
     * @var integer
     *
     * @ORM\Column(name="links_link_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $linksLinkId;

    /**
     * @var integer
     *
     * @ORM\Column(name="links_session_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $linksSessionId;


    /**
     * Get linksId
     *
     * @return integer
     */
    public function getLinksId()
    {
        return $this->linksId;
    }

    /**
     * Set linksUserId
     *
     * @param integer $linksUserId
     * @return TrackELinks
     */
    public function setLinksUserId($linksUserId)
    {
        $this->linksUserId = $linksUserId;

        return $this;
    }

    /**
     * Get linksUserId
     *
     * @return integer
     */
    public function getLinksUserId()
    {
        return $this->linksUserId;
    }

    /**
     * Set linksDate
     *
     * @param \DateTime $linksDate
     * @return TrackELinks
     */
    public function setLinksDate($linksDate)
    {
        $this->linksDate = $linksDate;

        return $this;
    }

    /**
     * Get linksDate
     *
     * @return \DateTime
     */
    public function getLinksDate()
    {
        return $this->linksDate;
    }

    /**
     * Set cId
     *
     * @param integer $cId
     * @return TrackELinks
     */
    public function setCId($cId)
    {
        $this->cId = $cId;

        return $this;
    }

    /**
     * Get cId
     *
     * @return integer
     */
    public function getCId()
    {
        return $this->cId;
    }

    /**
     * Set linksLinkId
     *
     * @param integer $linksLinkId
     * @return TrackELinks
     */
    public function setLinksLinkId($linksLinkId)
    {
        $this->linksLinkId = $linksLinkId;

        return $this;
    }

    /**
     * Get linksLinkId
     *
     * @return integer
     */
    public function getLinksLinkId()
    {
        return $this->linksLinkId;
    }

    /**
     * Set linksSessionId
     *
     * @param integer $linksSessionId
     * @return TrackELinks
     */
    public function setLinksSessionId($linksSessionId)
    {
        $this->linksSessionId = $linksSessionId;

        return $this;
    }

    /**
     * Get linksSessionId
     *
     * @return integer
     */
    public function getLinksSessionId()
    {
        return $this->linksSessionId;
    }
}
