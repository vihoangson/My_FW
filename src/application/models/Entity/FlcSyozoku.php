<?php



namespace Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Index;
use Doctrine\ORM\Mapping\UniqueConstraint;

/**
 * FlcSyozoku
 *
 * @Table(name="flc_syozoku", uniqueConstraints={@UniqueConstraint(name="syozoku_code__name", columns={"syozoku_code", "syozoku_name"})})
 * @Entity
 */
class FlcSyozoku
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
     * Set syozokuCode
     *
     * @param string $syozokuCode
     *
     * @return FlcSyozoku
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
     * @return FlcSyozoku
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
     * @return FlcSyozoku
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
     * @return FlcSyozoku
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
     * @return FlcSyozoku
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

