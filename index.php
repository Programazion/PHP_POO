<?php

class libro{ 

    public int $valorLibro;
    public string $tamannio;
    private string $isbn;
    public string $nombre;

    function __construct($tamannio,$precioLibro=0,$nombre){
        
    
        $this->tamannio=$tamannio;
        $this->valorLibro = $precioLibro;
        $this->isbn="ssssss";
        $this->nombre=$nombre;

        // // $forma;
        // $textura;
        // $idiomas;
        // $color;
        // $isbn;
      }

    public function Mostrar(){

    }

    public function Informar(){
        echo "Ejecutando en acción o metodo informar de la clase Libro";
        echo "<br>";
        $this->MostrarIsbn();
        echo "<br>".$this->isbn;

    }

    function Compartir(){

    }

    private function MostrarIsbn(){

        echo "Ejecutando en acción o metodo MostrarIsbn de la clase Libro";

    }


}
//Creación de objeto #1

$libroParticular = new libro("15 cm",12000, "Cien años de Soledad","DFS23");// instanciando clase, creando un objeto a partir de una clase

echo $libroParticular->tamannio;
echo "<br>";
echo $libroParticular->valorLibro;
echo "<br>";
echo $libroParticular->nombre;
echo "<br>";
$libroParticular->Informar();
echo"<br>";

//Creación de objeto # 2

$libroFrances = new libro("5 cm",40000, "Dictionary");// instanciando clase, creando un objeto a partir de una clase

echo $libroFrances->tamannio;
echo "<br>";
echo $libroFrances->valorLibro;
echo "<br>";
echo $libroFrances->nombre;
echo "<br>";
$libroFrances->Informar();



?>