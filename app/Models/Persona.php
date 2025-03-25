<?php

namespace App\Models;

/**
 * Clase Persona - Modelo que representa una persona en el sistema
 * 
 * Esta clase implementa el patrón de encapsulamiento de POO usando:
 * - Atributos privados para los datos
 * - Constructor para inicialización
 * - Métodos públicos getter/setter para acceso controlado
 */
class Persona {
    /** @var string Nombre de la persona */
    private string $nombre;
    
    /** @var int Edad de la persona */
    private int $edad;
    
    /** @var string Rol o ocupación de la persona */
    private string $rol;

    /**
     * Constructor de la clase Persona
     * 
     * @param string $nombre Nombre de la persona
     * @param int $edad Edad de la persona
     * @param string $rol Rol de la persona
     */
    public function __construct(string $nombre, int $edad, string $rol) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->rol = $rol;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getEdad(): int {
        return $this->edad;
    }

    public function getRol(): string {
        return $this->rol;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setEdad(int $edad): void {
        $this->edad = $edad;
    }

    public function setRol(string $rol): void {
        $this->rol = $rol;
    }

    public function obtenerInformacion(): string {
        return "Nombre: {$this->nombre}, Edad: {$this->edad}, Rol: {$this->rol}";
    }
}