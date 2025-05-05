<?php
const NOMBRE_JSON = 'libros.json';

class Libro
{
    public int $id = 0;
    public string $titulo = "";
    public string $autor = "";
    public int $precio = 0;
    public string $anio = "";
    public string $genero = "";
    public string $img = "";



    public function cargarDataDeArray(array $data): void
    {
        $this->id = $data['id'];
        $this->titulo = $data['titulo'];
        $this->autor = $data['autor'];
        $this->precio = $data['precio'];
        $this->anio = $data['anio'];
        $this->genero = $data['genero'];
        $this->img = $data['img'];
    }

    /**
     * Retorna un array con todos los libros.
     * 
     * @return self[]
     */
    public function todas(): array
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

    public function porId(int $id): ?self
    {
        $libros = $this->todas();

        foreach ($libros as $libro) {
            if ($libro->id == $id) {
                return $libro;
            }
        }
        return null;
    }
}