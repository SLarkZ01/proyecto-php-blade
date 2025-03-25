<?php

namespace App\Http\Controllers;

use App\Models\Persona;

/**
 * Controlador que demuestra diferentes usos del bucle foreach en Laravel
 * 
 * Este controlador implementa tres ejemplos distintos de foreach:
 * 1. Iteración sobre un array simple de strings
 * 2. Iteración sobre un array asociativo (key => value)
 * 3. Iteración sobre un array de objetos Persona
 */
class EjemploForEachController extends Controller {
    /**
     * Método que prepara y envía los datos a la vista
     * Demuestra tres diferentes implementaciones de foreach
     * 
     * @return \Illuminate\View\View
     */
    public function ejemploForEach() {
        // Ejemplo 1: Array simple de strings
        // Demuestra la iteración básica sobre un array indexado
        $frutas = ['manzana', 'naranja', 'plátano', 'uva'];
        $resultadoFrutas = "Frutas disponibles: ";
        foreach ($frutas as $fruta) {
            $resultadoFrutas .= $fruta . ", ";
        }

        // Ejemplo 2: Array asociativo (key => value)
        // Demuestra cómo acceder tanto a la clave como al valor
        $precios = [
            'manzana' => 1.5,
            'naranja' => 2.0,
            'plátano' => 1.0,
            'uva' => 3.0
        ];
        $resultadoPrecios = "Precios: ";
        foreach ($precios as $fruta => $precio) {
            $resultadoPrecios .= "$fruta: $$precio, ";
        }

        // Ejemplo 3: Array de objetos Persona
        // Demuestra la iteración sobre objetos y el uso de getters
        $personas = [
            new Persona('Juan', 20, 'estudiante'),
            new Persona('María', 35, 'docente'),
            new Persona('Carlos', 45, 'coordinador'),
            new Persona('Ana', 19, 'estudiante')
        ];

        return view('ejemplos.foreach', [
            'frutas' => $frutas,
            'precios' => $precios,
            'personas' => $personas,
            'resultadoFrutas' => $resultadoFrutas,
            'resultadoPrecios' => $resultadoPrecios
        ]);
    }
}