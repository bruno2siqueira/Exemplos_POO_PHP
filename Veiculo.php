<!DOCTYPE html>
<html>

<body>

    <?php
    class Veiculo{
        //atributos
        public $tipo;
        public $marca;
        public $qtd_rodas;
        //metodos
        public function andar(){
            echo "Veiculo Andando...";
        }
        public function ligar()
        {
            echo "Veiculo ligado!";
        }
    }

    class Carro extends Veiculo{
        public function __construct($marca, $tipo, $qtd_rodas){
            echo $this->marca = $marca;
            echo $this->tipo = $tipo;
            echo $this->marca = $qtd_rodas;
        }
    }

    $fusca = new Carro("Fusca", "VW", "4*");
    $fusca->andar();




    ?>

</body>

</html>
