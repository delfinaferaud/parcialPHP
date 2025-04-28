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

    /**
     * Carga los datos del objeto con la $data.
     */
    public function cargarDataDeArray(array $data): void
    {
        $this->id           = $data['id'];
        $this->titulo               = $data['titulo'];
        $this->autor             = $data['autor'];
        $this->precio               = $data['precio'];
        $this->anio               = $data['anio'];
        $this->genero   = $data['genero'];
        $this->img   = $data['img'];
    }

    /**
    * Retorna un array con todas las noticias.
    * 
    * @return self[]
    */
    public function todas(): array
    {
        $librosJson =  json_decode(file_get_contents(__DIR__ . '/../data/' . NOMBRE_JSON), true);
    
        // Ahora queremos transformar ese array a una instancia de Noticia.
        // Primero, definamos un nuevo array para guardar las noticias como objetos.
        $libros = [];
    
        // Podemos agregarle las noticias, por ejemplo, con un bucle.
        foreach($librosJson as $unLibroJson) {
            // Instanciamos la clase Noticia, le asignamos las propiedades, y la 
            // agregamos al array.
            // $noticia = new Noticia;
            // La keyword "self" se reemplaza por el nombre de la clase en la que
            // estamos. En este caso, se reemplaza por "Noticia".
            $libro = new self;
            $libro->cargarDataDeArray($unLibroJson);
    
            $libros[] = $libro;
        }
    
        return $libros;
    }

    /**
     * Retorna la noticia con el $id.
     */
    public function porId(int $id): ?self // ?Noticia == Noticia|null
    {
        // Las noticias las traemos del JSON, que es levantado por el método
        // Noticia::todas().
        $libros = $this->todas();
    
        foreach($libros as $libro) {
            if($libro->id == $id) {
                return $libro;
            }
        }
        return null;
    }
}