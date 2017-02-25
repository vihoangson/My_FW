<?php
namespace Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Index;

/**
 * Action
 *
 * @Table(name="action", indexes={@Index(name="action_group_id", columns={"action_group_id"})})
 * @Entity
 */
class Action
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
     * @Column(name="action_group_id", type="smallint", nullable=false)
     */
    private $actionGroupId = '0';

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=128, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @Column(name="method_name", type="string", length=64, nullable=false)
     */
    private $methodName = '';

    /**
     * @var boolean
     *
     * @Column(name="is_display_menu", type="boolean", nullable=false)
     */
    private $isDisplayMenu = '0';

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
     * Set actionGroupId
     *
     * @param integer $actionGroupId
     *
     * @return Action
     */
    public function setActionGroupId($actionGroupId)
    {
        $this->actionGroupId = $actionGroupId;

        return $this;
    }

    /**
     * Get actionGroupId
     *
     * @return integer
     */
    public function getActionGroupId()
    {
        return $this->actionGroupId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Action
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
     * Set methodName
     *
     * @param string $methodName
     *
     * @return Action
     */
    public function setMethodName($methodName)
    {
        $this->methodName = $methodName;

        return $this;
    }

    /**
     * Get methodName
     *
     * @return string
     */
    public function getMethodName()
    {
        return $this->methodName;
    }

    /**
     * Set isDisplayMenu
     *
     * @param boolean $isDisplayMenu
     *
     * @return Action
     */
    public function setIsDisplayMenu($isDisplayMenu)
    {
        $this->isDisplayMenu = $isDisplayMenu;

        return $this;
    }

    /**
     * Get isDisplayMenu
     *
     * @return boolean
     */
    public function getIsDisplayMenu()
    {
        return $this->isDisplayMenu;
    }

    /**
     * Set sequence
     *
     * @param integer $sequence
     *
     * @return Action
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
     * @return Action
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
     * @return Action
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
     * @return Action
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
     * @return Action
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

