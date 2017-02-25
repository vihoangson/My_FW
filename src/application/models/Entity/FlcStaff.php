<?php



namespace Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Index;
use Doctrine\ORM\Mapping\UniqueConstraint;

/**
 * FlcStaff
 *
 * @Table(name="flc_staff", uniqueConstraints={@UniqueConstraint(name="staff_id", columns={"staff_id"})}, indexes={@Index(name="syozoku_code__name", columns={"syozoku_code", "syozoku_name"})})
 * @Entity
 */
class FlcStaff
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
     * @Column(name="staff_id", type="integer", nullable=false)
     */
    private $staffId = '0';

    /**
     * @var string
     *
     * @Column(name="password", type="string", length=64, nullable=false)
     */
    private $password = '';

    /**
     * @var string
     *
     * @Column(name="staff_name", type="string", length=128, nullable=false)
     */
    private $staffName = '';

    /**
     * @var string
     *
     * @Column(name="staff_kana", type="string", length=128, nullable=false)
     */
    private $staffKana = '';

    /**
     * @var string
     *
     * @Column(name="staff_job", type="string", length=64, nullable=false)
     */
    private $staffJob = '';

    /**
     * @var string
     *
     * @Column(name="busyo_code", type="string", length=5, nullable=false)
     */
    private $busyoCode = '';

    /**
     * @var string
     *
     * @Column(name="busyo_name", type="string", length=128, nullable=false)
     */
    private $busyoName = '';

    /**
     * @var string
     *
     * @Column(name="busyo_kana", type="string", length=128, nullable=false)
     */
    private $busyoKana = '';

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
     * @var string
     *
     * @Column(name="syozoku_kana", type="string", length=128, nullable=false)
     */
    private $syozokuKana = '';

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
     * Set staffId
     *
     * @param integer $staffId
     *
     * @return FlcStaff
     */
    public function setStaffId($staffId)
    {
        $this->staffId = $staffId;

        return $this;
    }

    /**
     * Get staffId
     *
     * @return integer
     */
    public function getStaffId()
    {
        return $this->staffId;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return FlcStaff
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set staffName
     *
     * @param string $staffName
     *
     * @return FlcStaff
     */
    public function setStaffName($staffName)
    {
        $this->staffName = $staffName;

        return $this;
    }

    /**
     * Get staffName
     *
     * @return string
     */
    public function getStaffName()
    {
        return $this->staffName;
    }

    /**
     * Set staffKana
     *
     * @param string $staffKana
     *
     * @return FlcStaff
     */
    public function setStaffKana($staffKana)
    {
        $this->staffKana = $staffKana;

        return $this;
    }

    /**
     * Get staffKana
     *
     * @return string
     */
    public function getStaffKana()
    {
        return $this->staffKana;
    }

    /**
     * Set staffJob
     *
     * @param string $staffJob
     *
     * @return FlcStaff
     */
    public function setStaffJob($staffJob)
    {
        $this->staffJob = $staffJob;

        return $this;
    }

    /**
     * Get staffJob
     *
     * @return string
     */
    public function getStaffJob()
    {
        return $this->staffJob;
    }

    /**
     * Set busyoCode
     *
     * @param string $busyoCode
     *
     * @return FlcStaff
     */
    public function setBusyoCode($busyoCode)
    {
        $this->busyoCode = $busyoCode;

        return $this;
    }

    /**
     * Get busyoCode
     *
     * @return string
     */
    public function getBusyoCode()
    {
        return $this->busyoCode;
    }

    /**
     * Set busyoName
     *
     * @param string $busyoName
     *
     * @return FlcStaff
     */
    public function setBusyoName($busyoName)
    {
        $this->busyoName = $busyoName;

        return $this;
    }

    /**
     * Get busyoName
     *
     * @return string
     */
    public function getBusyoName()
    {
        return $this->busyoName;
    }

    /**
     * Set busyoKana
     *
     * @param string $busyoKana
     *
     * @return FlcStaff
     */
    public function setBusyoKana($busyoKana)
    {
        $this->busyoKana = $busyoKana;

        return $this;
    }

    /**
     * Get busyoKana
     *
     * @return string
     */
    public function getBusyoKana()
    {
        return $this->busyoKana;
    }

    /**
     * Set syozokuCode
     *
     * @param string $syozokuCode
     *
     * @return FlcStaff
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
     * @return FlcStaff
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
     * Set syozokuKana
     *
     * @param string $syozokuKana
     *
     * @return FlcStaff
     */
    public function setSyozokuKana($syozokuKana)
    {
        $this->syozokuKana = $syozokuKana;

        return $this;
    }

    /**
     * Get syozokuKana
     *
     * @return string
     */
    public function getSyozokuKana()
    {
        return $this->syozokuKana;
    }

    /**
     * Set createDatetime
     *
     * @param \DateTime $createDatetime
     *
     * @return FlcStaff
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
     * @return FlcStaff
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
     * @return FlcStaff
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

