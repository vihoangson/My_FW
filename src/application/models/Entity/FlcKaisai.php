<?php



namespace Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Index;
use Doctrine\ORM\Mapping\UniqueConstraint;

/**
 * FlcKaisai
 *
 * @Table(name="flc_kaisai", uniqueConstraints={@UniqueConstraint(name="kaisai_id", columns={"kaisai_id"})}, indexes={@Index(name="boos_id", columns={"boos_id"})})
 * @Entity
 */
class FlcKaisai
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
     * @Column(name="kaisai_id", type="integer", nullable=false)
     */
    private $kaisaiId = '0';

    /**
     * @var \DateTime
     *
     * @Column(name="kaisai_date", type="datetime", nullable=false)
     */
    private $kaisaiDate = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @Column(name="boos_id", type="integer", nullable=false)
     */
    private $boosId = '0';

    /**
     * @var string
     *
     * @Column(name="boos_name", type="string", length=64, nullable=false)
     */
    private $boosName = '';

    /**
     * @var string
     *
     * @Column(name="syozoku_code", type="string", length=5, nullable=false)
     */
    private $syozokuCode = '';

    /**
     * @var string
     *
     * @Column(name="syozoku_name", type="string", length=128, nullable=false)
     */
    private $syozokuName = '';

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
     * Set kaisaiId
     *
     * @param integer $kaisaiId
     *
     * @return FlcKaisai
     */
    public function setKaisaiId($kaisaiId)
    {
        $this->kaisaiId = $kaisaiId;

        return $this;
    }

    /**
     * Get kaisaiId
     *
     * @return integer
     */
    public function getKaisaiId()
    {
        return $this->kaisaiId;
    }

    /**
     * Set kaisaiDate
     *
     * @param \DateTime $kaisaiDate
     *
     * @return FlcKaisai
     */
    public function setKaisaiDate($kaisaiDate)
    {
        $this->kaisaiDate = $kaisaiDate;

        return $this;
    }

    /**
     * Get kaisaiDate
     *
     * @return \DateTime
     */
    public function getKaisaiDate()
    {
        return $this->kaisaiDate;
    }

    /**
     * Set boosId
     *
     * @param integer $boosId
     *
     * @return FlcKaisai
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
     * @return FlcKaisai
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
     * Set syozokuCode
     *
     * @param string $syozokuCode
     *
     * @return FlcKaisai
     */
    public function setSyozokuCode($syozokuCode)
    {
        $this->syozokuCode = $syozokuCode;

        return $this;
    }

    /**
     * Get syozokuCode
     *
     * @return string
     */
    public function getSyozokuCode()
    {
        return $this->syozokuCode;
    }

    /**
     * Set syozokuName
     *
     * @param string $syozokuName
     *
     * @return FlcKaisai
     */
    public function setSyozokuName($syozokuName)
    {
        $this->syozokuName = $syozokuName;

        return $this;
    }

    /**
     * Get syozokuName
     *
     * @return string
     */
    public function getSyozokuName()
    {
        return $this->syozokuName;
    }

    /**
     * Set createDatetime
     *
     * @param \DateTime $createDatetime
     *
     * @return FlcKaisai
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
     * @return FlcKaisai
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
     * @return FlcKaisai
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

