<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuarioSeguidor
 *
 * @ORM\Table(name="usuario_seguidor", indexes={@ORM\Index(name="seguidor_id", columns={"seguidor_id"}), @ORM\Index(name="usuario_id", columns={"usuario_id"})})
 * @ORM\Entity
 */
class UsuarioSeguidor
{
    /**
     * @var int
     *
     * @ORM\Column(name="usuario_seguidor_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usuarioSeguidorId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fecha_desde", type="integer", nullable=true)
     */
    private $fechaDesde;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fecha_hasta", type="integer", nullable=true)
     */
    private $fechaHasta;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="seguidor_id", referencedColumnName="id")
     * })
     */
    private $seguidor;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;


}
