<?php

namespace Rtd\Application\Entity\Central;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadoCivil
 *
 * @ORM\Table(schema="central", name="estado_civil")
 * @ORM\Entity
 */
class EstadoCivil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="bigint", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="central.estado_civil_codigo_seq", allocationSize=1, initialValue=1)
     */
    protected $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=40, precision=0, scale=0, nullable=true, unique=false)
     */
    protected $descricao;


    /**
     * Get codigo
     *
     * @return integer
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return EstadoCivil
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }
}

