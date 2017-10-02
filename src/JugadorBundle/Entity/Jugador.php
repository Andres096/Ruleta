<?php

namespace JugadorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jugador
 *
 * @ORM\Table(name="jugador")
 * @ORM\Entity(repositoryClass="JugadorBundle\Repository\JugadorRepository")
 */
class Jugador
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="Identificacion", type="integer", unique=true)
     */
    private $identificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=20)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido", type="string", length=20)
     */
    private $apellido;

    /**
     * @var int
     *
     * @ORM\Column(name="Dinero", type="integer")
     */
    private $dinero;

    /**
     * @var string
     *
     * @ORM\Column(name="Alias", type="string", length=25, unique=true)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=25)
     */
    private $password;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set identificacion
     *
     * @param integer $identificacion
     *
     * @return Jugador
     */
    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;

        return $this;
    }

    /**
     * Get identificacion
     *
     * @return int
     */
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Jugador
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Jugador
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set dinero
     *
     * @param integer $dinero
     *
     * @return Jugador
     */
    public function setDinero($dinero)
    {
        $this->dinero = $dinero;

        return $this;
    }

    /**
     * Get dinero
     *
     * @return int
     */
    public function getDinero()
    {
        return $this->dinero;
    }

    /**
     * Set alias
     *
     * @param string $alias
     *
     * @return Jugador
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Jugador
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
}

