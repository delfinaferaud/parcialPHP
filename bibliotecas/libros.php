<?php
require_once __DIR__ . '/../classes/Libro.php';

const NOMBRE_JSON = 'libros.json';

/**
 * Retorna un array con todos los libros.
 * 
 * @return Libro[]
 */
function obtenerLibros(): array
{
    $librosJson = json_decode(file_get_contents(__DIR__ . '/../data/' . NOMBRE_JSON), true);
    $libros = [];

    foreach ($librosJson as $unLibroJson) {
        $libro = new Libro;
        $libro->cargarDataDeArray($unLibroJson);
        $libros[] = $libro;
    }

    return $libros;


}


function obtenerLibroPorId(int $id): ?Libro
{
    $libros = obtenerLibros();

    foreach ($libros as $libro) {
        if ($libro->id == $id) {
            return $libro;
        }
    }
    return null;
}