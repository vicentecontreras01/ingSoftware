<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Lineas telefonicas de la empresa
 * 
 * @ApiResource
 * @ORM\Entity(repositoryClass="App\Repository\LineaRepository")
 */
class Linea
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
    * Numero de la linea
    * @ORM\Column(type="integer")
    */
    private $numero;

    /**
     * Empleado asociado
     * @var App\Entity\Empleado
     * @ORM\ManyToOne(targetEntity="App\Entity\Empleado", inversedBy="lineas")
     */
    private $empleado;

    /**
     * Grupo de la linea 
     * @var App\Entity\Grupo
     * @ORM\ManyToOne(targetEntity="App\Entity\Grupo", inversedBy="lineas")
     */
    private $grupo;
    /**
     * Grupo de la linea 
     * @var App\Entity\Equipo
     * @ORM\ManyToOne(targetEntity="App\Entity\Equipo", inversedBy="lineas")
     */
    private $equipo;

    

    public function getId()
    {
        return $this->id;
    }



    /**
     * Get empleado asociado
     *
     * @return  App\Entity\Empleado
     */ 
    public function getEmpleado()
    {
        return $this->empleado;
    }

    /**
     * Set empleado asociado
     *
     * @param  App\Entity\Empleado  $empleado  Empleado asociado
     *
     * @return  self
     */ 
    public function setEmpleado($empleado)
    {
        $this->empleado = $empleado;

        return $this;
    }
}
