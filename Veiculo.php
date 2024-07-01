<!DOCTYPE html>
<html>
<body>
    <?php
    class Veiculo{
        // atributos da classe Veiculo
        public $tipo;
        public $marca;
        public $qtd_rodas;
        // metodos da classe Veiculo
        public function __construct(){
            echo "EU SOU UM VEICULO<br>";
        }
        public function Andar(){
            echo "Veiculo Andando...<br>";
        }
        public function Ligar()
        {s
            echo "Veiculo Ligado!<br>";
        }
    }
    class Carro extends Veiculo{
        //metodo contrutor
        public function __construct($tipo, $marca, $qtd_rodas){
            echo $this->tipo = $tipo;
            echo $this->marca = $marca;
            echo $this->qtd_rodas = $qtd_rodas;
        }
    }
    //Crindo um objeto do tipo Veiculo
    $v8 = new Veiculo();
    $v8->Ligar();
    $v8->Andar();

    //criando um objeto do tipo Carro, filha do Veiculo
    $fusca = new Carro("Fusca", "VW", "4");


    ?>

</body>

</html>
