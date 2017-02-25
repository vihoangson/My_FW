<?php
namespace Entity;


use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Index;
/**
 * Account
 *
 * @Table(name="account", indexes={@Index(name="flc_staff_id", columns={"flc_staff_id"}), @Index(name="partner_id", columns={"partner_id"}), @Index(name="authority_id", columns={"authority_id"}), @Index(name="login_id", columns={"login_id"})})
 * @Entity
 */
class Account
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
     * @Column(name="flc_staff_id", type="integer", nullable=false)
     */
    private $flcStaffId = '0';

    /**
     * @var integer
     *
     * @Column(name="partner_id", type="integer", nullable=false)
     */
    private $partnerId = '0';

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=128, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @Column(name="login_id", type="string", length=64, nullable=false)
     */
    private $loginId = '';

    /**
     * @var string
     *
     * @Column(name="password", type="string", length=64, nullable=false)
     */
    private $password = '';

    /**
     * @var integer
     *
     * @Column(name="authority_id", type="smallint", nullable=false)
     */
    private $authorityId = '0';

    /**
     * @var boolean
     *
     * @Column(name="is_child", type="boolean", nullable=false)
     */
    private $isChild = '0';

    /**
     * @var integer
     *
     * @Column(name="sequence", type="integer", nullable=false)
     */
    private $sequence = '0';

    /**
     * @var integer
     *
     * @Column(name="lastup_account_id", type="integer", nullable=false)
     */
    private $lastupAccountId = '0';

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
     * Set flcStaffId
     *
     * @param integer $flcStaffId
     *
     * @return Account
     */
    public function setFlcStaffId($flcStaffId)
    {
        $this->flcStaffId = $flcStaffId;

        return $this;
    }

    /**
     * Get flcStaffId
     *
     * @return integer
     */
    public function getFlcStaffId()
    {
        return $this->flcStaffId;
    }

    /**
     * Set partnerId
     *
     * @param integer $partnerId
     *
     * @return Account
     */
    public function setPartnerId($partnerId)
    {
        $this->partnerId = $partnerId;

        return $this;
    }

    /**
     * Get partnerId
     *
     * @return integer
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Account
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set loginId
     *
     * @param string $loginId
     *
     * @return Account
     */
    public function setLoginId($loginId)
    {
        $this->loginId = $loginId;

        return $this;
    }

    /**
     * Get loginId
     *
     * @return string
     */
    public function getLoginId()
    {
        return $this->loginId;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Account
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
     * Set authorityId
     *
     * @param integer $authorityId
     *
     * @return Account
     */
    public function setAuthorityId($authorityId)
    {
        $this->authorityId = $authorityId;

        return $this;
    }

    /**
     * Get authorityId
     *
     * @return integer
     */
    public function getAuthorityId()
    {
        return $this->authorityId;
    }

    /**
     * Set isChild
     *
     * @param boolean $isChild
     *
     * @return Account
     */
    public function setIsChild($isChild)
    {
        $this->isChild = $isChild;

        return $this;
    }

    /**
     * Get isChild
     *
     * @return boolean
     */
    public function getIsChild()
    {
        return $this->isChild;
    }

    /**
     * Set sequence
     *
     * @param integer $sequence
     *
     * @return Account
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return integer
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set lastupAccountId
     *
     * @param integer $lastupAccountId
     *
     * @return Account
     */
    public function setLastupAccountId($lastupAccountId)
    {
        $this->lastupAccountId = $lastupAccountId;

        return $this;
    }

    /**
     * Get lastupAccountId
     *
     * @return integer
     */
    public function getLastupAccountId()
    {
        return $this->lastupAccountId;
    }

    /**
     * Set createDatetime
     *
     * @param \DateTime $createDatetime
     *
     * @return Account
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
     * @return Account
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
     * @return Account
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

