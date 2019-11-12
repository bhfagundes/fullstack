<?php
class Numero 
{
    public $numero1;
    public $numero2;
    public $numero3;

  
    public function getNumero1() 
    {
        return $this->numero1;
    }
  
    public function setNumero1($numero1) 
    {
        $this->numero1= $numero1;
    }
  
    public function getNumero2() 
    {
        return $this->numero1;
    }
  
    public function setNumero2($numero2) 
    {
        $this->numero2= $numero2;
    }

    public function getNumero3() 
    {
        return $this->numero1;
    }
  
    public function setNumero3($numero3) 
    {
        $this->numero3= $numero3;
    }

    public function multiplicacao()
    {
        return $this->numero1 * $this->numero2 * $this->numero3;
    }
    public function soma()
    {
        return $this->numero1 + $this->numero2 + $this->numero3;
    }
    public function subtracao()
    {
        return $this->numero1 - $this->numero2 - $this->numero3;
    }
  
}
    ##Exemplo de uso
    $numeros = new Numero;
    $numeros->setNumero1(2);
    $numeros->setNumero2(3);
    $numeros->setNumero3(5);

    echo ($numeros->multiplicacao());


?>