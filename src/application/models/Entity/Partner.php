<?php



namespace Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Index;

/**
 * Partner
 *
 * @Table(name="partner", indexes={@Index(name="partner_type_id", columns={"partner_type_id"}), @Index(name="parent_partner_id", columns={"parent_partner_id"}), @Index(name="code", columns={"code"})})
 * @Entity
 */
class Partner
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
     * @Column(name="partner_type_id", type="smallint", nullable=false)
     */
    private $partnerTypeId = '0';

    /**
     * @var integer
     *
     * @Column(name="parent_partner_id", type="integer", nullable=false)
     */
    private $parentPartnerId = '0';

    /**
     * @var boolean
     *
     * @Column(name="collect_type", type="boolean", nullable=false)
     */
    private $collectType = '0';

    /**
     * @var string
     *
     * @Column(name="code", type="string", length=10, nullable=false)
     */
    private $code = '';

    /**
     * @var integer
     *
     * @Column(name="rename_partner_id", type="integer", nullable=false)
     */
    private $renamePartnerId = '0';

    /**
     * @var integer
     *
     * @Column(name="rename_partner_type_id", type="smallint", nullable=false)
     */
    private $renamePartnerTypeId = '0';

    /**
     * @var integer
     *
     * @Column(name="rename_type_id", type="smallint", nullable=false)
     */
    private $renameTypeId = '0';

    /**
     * @var string
     *
     * @Column(name="prefix_csid", type="string", length=12, nullable=false)
     */
    private $prefixCsid = '';

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=128, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @Column(name="name_kana", type="string", length=128, nullable=false)
     */
    private $nameKana = '';

    /**
     * @var string
     *
     * @Column(name="zipcode", type="string", length=12, nullable=false)
     */
    private $zipcode = '';

    /**
     * @var string
     *
     * @Column(name="address", type="text", length=65535, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @Column(name="phone_no", type="string", length=32, nullable=false)
     */
    private $phoneNo = '';

    /**
     * @var string
     *
     * @Column(name="charge_staff_name", type="string", length=64, nullable=false)
     */
    private $chargeStaffName = '';

    /**
     * @var string
     *
     * @Column(name="charge_section_name", type="string", length=64, nullable=false)
     */
    private $chargeSectionName = '';

    /**
     * @var string
     *
     * @Column(name="charge_mail_address", type="string", length=128, nullable=false)
     */
    private $chargeMailAddress = '';

    /**
     * @var string
     *
     * @Column(name="bill_name", type="string", length=128, nullable=false)
     */
    private $billName = '';

    /**
     * @var string
     *
     * @Column(name="bill_zipcode", type="string", length=12, nullable=false)
     */
    private $billZipcode = '';

    /**
     * @var string
     *
     * @Column(name="bill_address", type="text", length=65535, nullable=false)
     */
    private $billAddress;

    /**
     * @var string
     *
     * @Column(name="remarks", type="text", length=65535, nullable=false)
     */
    private $remarks;

    /**
     * @var boolean
     *
     * @Column(name="is_default", type="boolean", nullable=false)
     */
    private $isDefault = '0';

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
     * Set partnerTypeId
     *
     * @param integer $partnerTypeId
     *
     * @return Partner
     */
    public function setPartnerTypeId($partnerTypeId)
    {
        $this->partnerTypeId = $partnerTypeId;

        return $this;
    }

    /**
     * Get partnerTypeId
     *
     * @return integer
     */
    public function getPartnerTypeId()
    {
        return $this->partnerTypeId;
    }

    /**
     * Set parentPartnerId
     *
     * @param integer $parentPartnerId
     *
     * @return Partner
     */
    public function setParentPartnerId($parentPartnerId)
    {
        $this->parentPartnerId = $parentPartnerId;

        return $this;
    }

    /**
     * Get parentPartnerId
     *
     * @return integer
     */
    public function getParentPartnerId()
    {
        return $this->parentPartnerId;
    }

    /**
     * Set collectType
     *
     * @param boolean $collectType
     *
     * @return Partner
     */
    public function setCollectType($collectType)
    {
        $this->collectType = $collectType;

        return $this;
    }

    /**
     * Get collectType
     *
     * @return boolean
     */
    public function getCollectType()
    {
        return $this->collectType;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Partner
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set renamePartnerId
     *
     * @param integer $renamePartnerId
     *
     * @return Partner
     */
    public function setRenamePartnerId($renamePartnerId)
    {
        $this->renamePartnerId = $renamePartnerId;

        return $this;
    }

    /**
     * Get renamePartnerId
     *
     * @return integer
     */
    public function getRenamePartnerId()
    {
        return $this->renamePartnerId;
    }

    /**
     * Set renamePartnerTypeId
     *
     * @param integer $renamePartnerTypeId
     *
     * @return Partner
     */
    public function setRenamePartnerTypeId($renamePartnerTypeId)
    {
        $this->renamePartnerTypeId = $renamePartnerTypeId;

        return $this;
    }

    /**
     * Get renamePartnerTypeId
     *
     * @return integer
     */
    public function getRenamePartnerTypeId()
    {
        return $this->renamePartnerTypeId;
    }

    /**
     * Set renameTypeId
     *
     * @param integer $renameTypeId
     *
     * @return Partner
     */
    public function setRenameTypeId($renameTypeId)
    {
        $this->renameTypeId = $renameTypeId;

        return $this;
    }

    /**
     * Get renameTypeId
     *
     * @return integer
     */
    public function getRenameTypeId()
    {
        return $this->renameTypeId;
    }

    /**
     * Set prefixCsid
     *
     * @param string $prefixCsid
     *
     * @return Partner
     */
    public function setPrefixCsid($prefixCsid)
    {
        $this->prefixCsid = $prefixCsid;

        return $this;
    }

    /**
     * Get prefixCsid
     *
     * @return string
     */
    public function getPrefixCsid()
    {
        return $this->prefixCsid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Partner
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
     * Set nameKana
     *
     * @param string $nameKana
     *
     * @return Partner
     */
    public function setNameKana($nameKana)
    {
        $this->nameKana = $nameKana;

        return $this;
    }

    /**
     * Get nameKana
     *
     * @return string
     */
    public function getNameKana()
    {
        return $this->nameKana;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     *
     * @return Partner
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Partner
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phoneNo
     *
     * @param string $phoneNo
     *
     * @return Partner
     */
    public function setPhoneNo($phoneNo)
    {
        $this->phoneNo = $phoneNo;

        return $this;
    }

    /**
     * Get phoneNo
     *
     * @return string
     */
    public function getPhoneNo()
    {
        return $this->phoneNo;
    }

    /**
     * Set chargeStaffName
     *
     * @param string $chargeStaffName
     *
     * @return Partner
     */
    public function setChargeStaffName($chargeStaffName)
    {
        $this->chargeStaffName = $chargeStaffName;

        return $this;
    }

    /**
     * Get chargeStaffName
     *
     * @return string
     */
    public function getChargeStaffName()
    {
        return $this->chargeStaffName;
    }

    /**
     * Set chargeSectionName
     *
     * @param string $chargeSectionName
     *
     * @return Partner
     */
    public function setChargeSectionName($chargeSectionName)
    {
        $this->chargeSectionName = $chargeSectionName;

        return $this;
    }

    /**
     * Get chargeSectionName
     *
     * @return string
     */
    public function getChargeSectionName()
    {
        return $this->chargeSectionName;
    }

    /**
     * Set chargeMailAddress
     *
     * @param string $chargeMailAddress
     *
     * @return Partner
     */
    public function setChargeMailAddress($chargeMailAddress)
    {
        $this->chargeMailAddress = $chargeMailAddress;

        return $this;
    }

    /**
     * Get chargeMailAddress
     *
     * @return string
     */
    public function getChargeMailAddress()
    {
        return $this->chargeMailAddress;
    }

    /**
     * Set billName
     *
     * @param string $billName
     *
     * @return Partner
     */
    public function setBillName($billName)
    {
        $this->billName = $billName;

        return $this;
    }

    /**
     * Get billName
     *
     * @return string
     */
    public function getBillName()
    {
        return $this->billName;
    }

    /**
     * Set billZipcode
     *
     * @param string $billZipcode
     *
     * @return Partner
     */
    public function setBillZipcode($billZipcode)
    {
        $this->billZipcode = $billZipcode;

        return $this;
    }

    /**
     * Get billZipcode
     *
     * @return string
     */
    public function getBillZipcode()
    {
        return $this->billZipcode;
    }

    /**
     * Set billAddress
     *
     * @param string $billAddress
     *
     * @return Partner
     */
    public function setBillAddress($billAddress)
    {
        $this->billAddress = $billAddress;

        return $this;
    }

    /**
     * Get billAddress
     *
     * @return string
     */
    public function getBillAddress()
    {
        return $this->billAddress;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     *
     * @return Partner
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Get remarks
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Set isDefault
     *
     * @param boolean $isDefault
     *
     * @return Partner
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * Get isDefault
     *
     * @return boolean
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Set sequence
     *
     * @param integer $sequence
     *
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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

