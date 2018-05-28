<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;

/**
 *
 *
 * @ApiResource
 * @ORM\Entity(repositoryClass="App\Repository\EmpleadoRepository")
 */
class Empleado
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string $rut
     * @ORM\Column(type="string", nullable=false)
     */
    private $rut;
    /**
     * @var string $nombre
     * @ORM\Column(type="string", nullable=false)
     */
    private $nombre;
    /**
     * @var string $fechaIngreso
     * @ORM\Column(type="string", nullable=false)
     */
    private $fechaIngreso;
    /**
     * @var string $apellido
     * @ORM\Column(type="string", nullable=false)
     */
    private $apellido;
    /**
     * @var string $codeCeco
     * @ORM\Column(type="string", nullable=false)
     */
    private $codeCeco;
    /**
     * @var string $nombreCeco
     * @ORM\Column(type="string", nullable=false)
     */
    private $nombreCeco;
    /**
     * @var string $unidadOrganizativa
     * @ORM\Column(type="string", nullable=false)
     */
    private $unidadOrganizativa;
    /**
     * @var string $division
     * @ORM\Column(type="string", nullable=false)
     */
    private $division;
    /**
     * @var string $subdivision
     * @ORM\Column(type="string", nullable=false)
     */
    private $subdivision;
    /**
     * @var string $cargo
     * @ORM\Column(type="string", nullable=false)
     */
    private $cargo;
    /**
     * @var string $empresa
     * @ORM\Column(type="string", nullable=false)
     */
    private $empresa;
    /**
     * @var string $nombreJefatura
     * @ORM\Column(type="string", nullable=true)
     */
    private $nombreJefatura;
    /**
     * Lineas asociadas a un empleado
     * @var App\Entity\Linea
     * @ORM\OneToMany(targetEntity="App\Entity\Linea", mappedBy="empleado")
     * @ORM\JoinColumn(nullable=true)
     * @ApiSubresource
     */
    private $lineas;
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get $rut
     *
     * @return  string
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set $rut
     *
     * @param  string  $rut  $rut
     *
     * @return  self
     */
    public function setRut(string $rut)
    {
        $this->rut = $rut;

        return $this;
    }

    /**
     * Get $nombre
     *
     * @return  string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set $nombre
     *
     * @param  string  $nombre  $nombre
     *
     * @return  self
     */
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get $fechaIngreso
     *
     * @return  string
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set $fechaIngreso
     *
     * @param  string  $fechaIngreso  $fechaIngreso
     *
     * @return  self
     */
    public function setFechaIngreso(string $fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get $codeCeco
     *
     * @return  string
     */
    public function getCodeCeco()
    {
        return $this->codeCeco;
    }

    /**
     * Set $codeCeco
     *
     * @param  string  $codeCeco  $codeCeco
     *
     * @return  self
     */
    public function setCodeCeco(string $codeCeco)
    {
        $this->codeCeco = $codeCeco;

        return $this;
    }

    /**
     * Get $nombreCeco
     *
     * @return  string
     */
    public function getNombreCeco()
    {
        return $this->nombreCeco;
    }

    /**
     * Set $nombreCeco
     *
     * @param  string  $nombreCeco  $nombreCeco
     *
     * @return  self
     */
    public function setNombreCeco(string $nombreCeco)
    {
        $this->nombreCeco = $nombreCeco;

        return $this;
    }

    /**
     * Get $unidadOrganizativa
     *
     * @return  string
     */
    public function getUnidadOrganizativa()
    {
        return $this->unidadOrganizativa;
    }

    /**
     * Set $unidadOrganizativa
     *
     * @param  string  $unidadOrganizativa  $unidadOrganizativa
     *
     * @return  self
     */
    public function setUnidadOrganizativa(string $unidadOrganizativa)
    {
        $this->unidadOrganizativa = $unidadOrganizativa;

        return $this;
    }

    /**
     * Get $division
     *
     * @return  string
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Set $division
     *
     * @param  string  $division  $division
     *
     * @return  self
     */
    public function setDivision(string $division)
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Get $subdivision
     *
     * @return  string
     */
    public function getSubdivision()
    {
        return $this->subdivision;
    }

    /**
     * Set $subdivision
     *
     * @param  string  $subdivision  $subdivision
     *
     * @return  self
     */
    public function setSubdivision(string $subdivision)
    {
        $this->subdivision = $subdivision;

        return $this;
    }

    /**
     * Get $cargo
     *
     * @return  string
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set $cargo
     *
     * @param  string  $cargo  $cargo
     *
     * @return  self
     */
    public function setCargo(string $cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get $apellido
     *
     * @return  string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set $apellido
     *
     * @param  string  $apellido  $apellido
     *
     * @return  self
     */
    public function setApellido(string $apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }
    /**
     * Get $empresa
     *
     * @return  string
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set $empresa
     *
     * @param  string  $empresa  $empresa
     *
     * @return  self
     */
    public function setEmpresa(string $empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get $nombreJefatura
     *
     * @return  string
     */
    public function getNombreJefatura()
    {
        return $this->nombreJefatura;
    }

    /**
     * Set $nombreJefatura
     *
     * @param  string  $nombreJefatura  $nombreJefatura
     *
     * @return  self
     */
    public function setNombreJefatura(string $nombreJefatura)
    {
        $this->nombreJefatura = $nombreJefatura;

        return $this;
    }

    /**
     * Get lineas asociadas a un empleado
     *
     * @return  App\Entity\Linea
     */
    public function getLineas()
    {
        return $this->lineas;
    }

    /**
     * Set lineas asociadas a un empleado
     *
     * @param  App\Entity\Linea  $lineas  Lineas asociadas a un empleado
     *
     * @return  self
     */
    public function setLineas($lineas)
    {
        $this->lineas = $lineas;

        return $this;
    }
}
