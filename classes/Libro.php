<?php
const NOMBRE_JSON = 'libros.json';

class Libro
{
    public int $id = 0;
    public string $titulo = "";
    public string $autor = "";
    public string $anio = "";
    public string $genero = "";
    public string $img = "";
    public string $descripcion = "";

    public function cargarDataDeArray(array $data): void
    {
        $this->id = $data['id'];
        $this->titulo = $data['titulo'];
        $this->autor = $data['autor'];
        $this->anio = $data['anio'];
        $this->genero = $data['genero'];
        $this->img = $data['img'];
        $this->descripcion = $data['descripcion'];
    }

    /**
     * Retorna un array con todos los libros.
     * 
     * @return self[]
     */
    public function obtenerLibros(): array
    {
        $librosJson = json_decode(file_get_contents(__DIR__ . '/../data/' . NOMBRE_JSON), true);
        $libros = [];

        foreach ($librosJson as $unLibroJson) {
            $libro = new self;
            $libro->cargarDataDeArray($unLibroJson);

            $libros[] = $libro;
        }

        return $libros;
    }

    public function obtenerPorId(int $id): ?self
    {
        $libros = $this->obtenerLibros();

        foreach ($libros as $libro) {
            if ($libro->id == $id) {
                return $libro;
            }
        }
        return null;
    }
}