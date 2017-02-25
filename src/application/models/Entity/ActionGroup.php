<?php


namespace Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Index;

/**
 * ActionGroup
 *
 * @Table(name="action_group")
 * @Entity
 */
class ActionGroup
{
    /**
     * @var integer
     *
     * @Column(name="id", type="smallint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=128, nullable=false)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @Column(name="sequence", type="smallint", nullable=false)
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
     * Set name
     *
     * @param string $name
     *
     * @return ActionGroup
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
     * Set sequence
     *
     * @param integer $sequence
     *
     * @return ActionGroup
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
     * @return ActionGroup
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
     * @return ActionGroup
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
     * @return ActionGroup
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
     * @return ActionGroup
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

