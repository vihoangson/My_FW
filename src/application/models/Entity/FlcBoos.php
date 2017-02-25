<?php



namespace Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Index;
use Doctrine\ORM\Mapping\UniqueConstraint;

/**
 * FlcBoos
 *
 * @Table(name="flc_boos", uniqueConstraints={@UniqueConstraint(name="boos_id", columns={"boos_id"})})
 * @Entity
 */
class FlcBoos
{
    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @Column(name="boos_id", type="integer", nullable=false)
     */
    private $boosId = '0';

    /**
     * @var string
     *
     * @Column(name="boos_name", type="string", length=128, nullable=false)
     */
    private $boosName = '';

    /**
     * @var \DateTime
     *
     * @Column(name="create_datetime", type="datetime", nullable=false)
     */
    private $createDatetime = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @Column(name="lastup_datetime", type="datetime", nullable=false)
     */
    private $lastupDatetime = '0000-00-00 00:00:00';

    /**
     * @var boolean
     *
     * @Column(name="disable", type="boolean", nullable=false)
     */
    private $disable = '0';


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set boosId
     *
     * @param integer $boosId
     *
     * @return FlcBoos
     */
    public function setBoosId($boosId)
    {
        $this->boosId = $boosId;

        return $this;
    }

    /**
     * Get boosId
     *
     * @return integer
     */
    public function getBoosId()
    {
        return $this->boosId;
    }

    /**
     * Set boosName
     *
     * @param string $boosName
     *
     * @return FlcBoos
     */
    public function setBoosName($boosName)
    {
        $this->boosName = $boosName;

        return $this;
    }

    /**
     * Get boosName
     *
     * @return string
     */
    public function getBoosName()
    {
        return $this->boosName;
    }

    /**
     * Set createDatetime
     *
     * @param \DateTime $createDatetime
     *
     * @return FlcBoos
     */
    public function setCreateDatetime($createDatetime)
    {
        $this->createDatetime = $createDatetime;

        return $this;
    }

    /**
     * Get createDatetime
     *
     * @return \DateTime
     */
    public function getCreateDatetime()
    {
        return $this->createDatetime;
    }

    /**
     * Set lastupDatetime
     *
     * @param \DateTime $lastupDatetime
     *
     * @return FlcBoos
     */
    public function setLastupDatetime($lastupDatetime)
    {
        $this->lastupDatetime = $lastupDatetime;

        return $this;
    }

    /**
     * Get lastupDatetime
     *
     * @return \DateTime
     */
    public function getLastupDatetime()
    {
        return $this->lastupDatetime;
    }

    /**
     * Set disable
     *
     * @param boolean $disable
     *
     * @return FlcBoos
     */
    public function setDisable($disable)
    {
        $this->disable = $disable;

        return $this;
    }

    /**
     * Get disable
     *
     * @return boolean
     */
    public function getDisable()
    {
        return $this->disable;
    }
}

