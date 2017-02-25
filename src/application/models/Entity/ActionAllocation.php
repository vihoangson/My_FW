<?php


namespace Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Index;

/**
 * ActionAllocation
 *
 * @Table(name="action_allocation", indexes={@Index(name="authority_id__action_id", columns={"authority_id", "action_id"})})
 * @Entity
 */
class ActionAllocation
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
     * @Column(name="authority_id", type="smallint", nullable=false)
     */
    private $authorityId = '0';

    /**
     * @var integer
     *
     * @Column(name="action_id", type="integer", nullable=false)
     */
    private $actionId = '0';

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
     * Set authorityId
     *
     * @param integer $authorityId
     *
     * @return ActionAllocation
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
     * Set actionId
     *
     * @param integer $actionId
     *
     * @return ActionAllocation
     */
    public function setActionId($actionId)
    {
        $this->actionId = $actionId;

        return $this;
    }

    /**
     * Get actionId
     *
     * @return integer
     */
    public function getActionId()
    {
        return $this->actionId;
    }

    /**
     * Set lastupAccountId
     *
     * @param integer $lastupAccountId
     *
     * @return ActionAllocation
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
     * @return ActionAllocation
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
     * @return ActionAllocation
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
     * @return ActionAllocation
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

