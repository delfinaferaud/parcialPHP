<?php
/*
    Funciones en php
    ----------------
    Para definir una función en php usamos la sintaxis:

        function nombre() {
            // ... cuerpo
        }

    En php, a diferencia de JS, nosotros podemos tipar (hacer un "type-hint") tanto
    los parámetros de una función como el tipo de dato del retorno de la función.

    Si queremos tipar el retorno de una función, se hace escribiendo:

        function nombre(): tipo {
            // ... cuerpo
        }

    Dónde "tipo" es el tipo de dato (ej: string, bool, array, NombreDeClase, etc).


    php tiene soporte para un tipo especial de comantarios llamados "Doc Blocks".
    Estos son comentarios multilínea (como este que estamos leyendo), pero que 
    tienen algunas diferencias:
        - Abren con /** en vez de con /*
        - Si tiene más de una línea, todas deben empezar con un *
        - Permite el uso de ciertos "tags", identificados con @nombre
    
    Los "doc blocks" permiten agregar descripciones a símbolos (léase: variables,
    funciones, constantes, Clases, etc).
    Una forma de asociar un doc block a un símbolo es escribiendo el comentario justo
    antes de la definición del símbolo.
*/
require_once __DIR__ . '/../classes/Libro.php';

const NOMBRE_JSON = 'libros.json';

/**
 * Retorna un array con todas las noticias.
 * 
 * @return Libro[]
 */
function obtenerLibros(): array
{
    $librosJson =  json_decode(file_get_contents(__DIR__ . '/../data/' . NOMBRE_JSON), true);

    // Hasta acá tenemos un array con las noticias, donde cada noticia es un array.
    // Ahora queremos transformar ese array a una instancia de Noticia.
    // Primero, definamos un nuevo array para guardar las noticias como objetos.
    $libros = [];

    // Podemos agregarle las noticias, por ejemplo, con un bucle.
    foreach($librosJson as $unLibroJson) {
        // Instanciamos la clase Noticia, le asignamos las propiedades, y la 
        // agregamos al array.
        $libro = new Libro;
        $libro->cargarDataDeArray($unLibroJson);
        /*
            // $noticia->noticia_id = $unaNoticiaJson['noticia_id'];
            // $noticia->titulo = $unaNoticiaJson['titulo'];
            // $noticia->sinopsis = $unaNoticiaJson['sinopsis'];
            // $noticia->cuerpo = $unaNoticiaJson['cuerpo'];
            // $noticia->imagen = $unaNoticiaJson['imagen'];
            // $noticia->imagen_descripcion = $unaNoticiaJson['imagen_descripcion'];
        */

        $libros[] = $libro;
    }

    // echo "<pre>";
    // print_r($noticiasJson);
    // print_r($noticias);
    // echo "</pre>";

    return $libros;

    /*return [
        [
            'noticia_id' => 1,
            'titulo' => '\'Manu\' Ginóbili sigue rompiendo récords',
            'sinopsis' => 'Emanuel \'Manu\' Ginóbili viene rompiendo algunos récords tanto de su equipo como de la liga.',
            'cuerpo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi nostrum quae iste ducimus! Voluptatem omnis nostrum eius dicta deleniti fugit. Earum commodi modi recusandae quasi tenetur ut voluptate, cupiditate reprehenderit.',
            'imagen' => 'manu.jpg',
            'imagen_descripcion' => 'Manu Ginóbili',
        ],
        [
            'noticia_id' => 2,
            'titulo' => 'Houston Rockets lidera la conferencia',
            'sinopsis' => 'De la mano de James Harden, los Rockets se apuntan como candidatos para ganar los playoff.',
            'cuerpo' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus nihil facere suscipit tempora dolor! Numquam fugiat vero ad inventore reiciendis fugit esse iusto quisquam rem eveniet. Libero ipsa error tempora.',
            'imagen' => 'rockets-logo.jpg',
            'imagen_descripcion' => 'Houston Rockets Logo',
        ],
        [
            'noticia_id' => 3,
            'titulo' => 'Toronto Raptors queda primero en el Este',
            'sinopsis' => 'Los Raptors de Lowry y DeRozan se quedan con el primer lugar de su conferencia.',
            'cuerpo' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis expedita minima consequatur doloribus tempora odit, autem eligendi error explicabo, optio assumenda voluptates ea possimus, dignissimos blanditiis recusandae ut obcaecati rem.',
            'imagen' => 'raptors-logo.jpg',
            'imagen_descripcion' => 'Toronto Raptors Logo',
        ],
        [
            'noticia_id' => 4,
            'titulo' => 'Denver se queda corto por un partido',
            'sinopsis' => 'Quedó a una victoria y media de clasificar a los playoff.',
            'cuerpo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dignissimos eos ab laboriosam praesentium nemo? Ipsa exercitationem tenetur rerum facilis natus provident. Architecto illum quia magnam repudiandae. Sed, tempora eligendi!',
            'imagen' => 'nuggets-logo.jpg',
            'imagen_descripcion' => 'Denver Nuggets Logo',
        ],
        [
            'noticia_id' => 5,
            'titulo' => 'Otra nueva noticia',
            'sinopsis' => 'Lalala :D',
            'cuerpo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt pariatur maiores aspernatur blanditiis vero exercitationem atque quod earum soluta veritatis saepe fugit vitae voluptatum ad quas ex accusamus, sint enim.',
            'imagen' => 'manu.jpg',
            'imagen_descripcion' => 'Manu Ginóbili',
        ],
        [
            'noticia_id' => 6,
            'titulo' => 'Esta es otra noticia',
            'sinopsis' => ':D',
            'cuerpo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt pariatur maiores aspernatur blanditiis vero exercitationem atque quod earum soluta veritatis saepe fugit vitae voluptatum ad quas ex accusamus, sint enim.',
            'imagen' => 'nuggets-logo.jpg',
            'imagen_descripcion' => 'Denver Nuggets',
        ],
    ];*/
}

/**
 * Retorna la noticia con el $id.
 */
// function obtenerNoticiaPorId(int $id): array|null
function obtenerLibroPorId(int $id): ?Libro // ?Noticia == Noticia|null
{
    $libros = obtenerLibros();

    foreach($libros as $libro) {
        if($libro->libro == $id) {
            return $libro;
        }
    }
    return null;
}