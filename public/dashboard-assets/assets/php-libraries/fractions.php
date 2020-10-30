<?php
    /**
    * RESTA DE DOS FRACCIONES
    * primero pasa ambas fracciones a la forma x/y
    * Formula : a/b - c/d = (ad-bc)/(bd)
    * @return fraccion equivalente
    **/
    function restarFracciones($a,$b){
        $resultado = new Fraccion(0,0,0);
        $a = clone $a;
        $b = clone $b;
        $a->aFraccion();
        $b->aFraccion();;
        $resultado->numerador = $a->numerador*$b->denominador - $b->numerador*$a->denominador;
        $resultado->denominador = $a->denominador * $b->denominador;
        $resultado->simplificar();
        return $resultado;
    };

    /**
    * SUMA DE DOS FRACCIONES
    * primero pasa ambas fracciones a la forma x/y
    * Formula : a/b + c/d = (ad+bc)/(bd)
    * @return fraccion equivalente
    **/
    function sumarFracciones($a,$b){
        $resultado = new Fraccion(0,0,0);
        $a = clone $a;
        $b = clone $b;
        $a->aFraccion();
        $b->aFraccion();
        $resultado->numerador = $a->numerador*$b->denominador + $b->numerador*$a->denominador;
        $resultado->denominador = $a->denominador * $b->denominador;
        $resultado->simplificar();
        return $resultado;
    };

    /**
    * DIVISION DE DOS FRACCIONES
    * primero pasa ambas fracciones a la forma x/y
    * Formula : (a/b)/(c/d) = (ad)/(bc)
    * @return fraccion equivalente
    **/
    function dividirFracciones($a,$b){
        $resultado = new Fraccion(0,0,0);
        $a = clone $a;
        $b = clone $b;
        $a->aFraccion();
        $b->aFraccion();
        $resultado->numerador = $a->numerador * $b->denominador;
        $resultado->denominador = $a->denominador * $b->numerador;
        $resultado->simplificar();
        return $resultado;
    };


    /**
    * MULTIPLICACIONES DE DOS FRACCIONES
    * primero pasa ambas fracciones a la forma x/y
    * Formula : (a/b)/(c/d) = (ad)/(cd)
    * @return fraccion equivalente
    **/
    function multiplicarFracciones($a,$b){
        $resultado = new Fraccion(0,0,0);
        $a = clone $a;
        $b = clone $b;
        $a->aFraccion();
        $b->aFraccion();
        $resultado->numerador = $a->numerador * $b->numerador;
        $resultado->denominador = $b->denominador * $a->denominador;
        $resultado->simplificar();
        return $resultado;
    }


    /**
    * ABSTRACCION DE UNA FRACCION
    * Para incluir numeros mixtos, se ha agregado una parte
    * entera y parte fraccionaria
    **/
    class Fraccion {
        var $entero,
            $numerador,
            $denominador;
        /**
        *   Crea un numero mixto
        *   @param $entero - parte entera
        *   @param $numerador - numerador de la parte fraccionaria
        *   @param $denominador - denominador de la parte fraccionaria;
        **/
        function Fraccion($entero=0, $numerador=1, $denominador=1){
            $this->entero = $entero;
            $this->numerador = $numerador;
            $this->denominador = $denominador;
        }

        /**
        *   Convierte una fraccion impropia a numero mixto
        *   @return el mismo objeto
        */
        function aMixto(){
            if(
                $this->denominador   <
                abs($this->numerador)
            ){
                $this->entero = (int) ( $this->numerador / $this->denominador );
                $this->numerador  = abs($this->numerador) % $this->denominador;
            }
            return $this;
        }

        /**
        *  Simplifica la parte fraccionaria
        */

        function simplificar(){
            $hasta=0;
            $mayor=0;
            $dividir = 0;
            $logrado = false;

            $mayor = $this->numerador > $this->denominador ?
                $this->numerador :
                $this->denominador;

            $hasta = sqrt($mayor);

            if($this->denominador == 0) {
                return;
            }
            do {
                $dividir = 2;
                $logrado=false;
                do {
                    $res1 = $this->numerador % $dividir == 0;
                    $res2 = $this->denominador % $dividir == 0;
                    if($res1 && $res2){
                        $this->numerador = (int) $this->numerador / $dividir;
                        $this->denominador = (int) $this->denominador / $dividir;
                        $logrado = true;
                        break;
                    }
                    $dividir = $dividir == 2 ? 3 : $dividir+2;
                }while($dividir < $hasta);
            } while($logrado);
        }


        /**
        * Convierte el numero mixto a una fraccion impropia
        * @return el mismo objeto
        */
        function aFraccion(){
            $this->numerador = $this->entero*$this->denominador + $this->numerador;
            $this->entero = 0;
            return $this;
        }
        /**
        * Devuelve una representacion textual del numero mixto/fraccion
        * @return representacion textual
        */
        function aTexto(){
            //para fracciones
            if($this->entero == 0){
                if($this->numerador == 0){
                    return "0";
                }else if($this->denominador ==1){
                    return "$this->numerador";
                } else {
                    return $this->numerador."/".$this->denominador;
                }
            }
            // para numeros mixtos
            else {
                if($this->numerador == 0){
                   return "$this->entero";
                } else {
                    return $this->entero." ".$this->numerador."/".$this->denominador;
                }
            }
        }

    }

  /*$x = new Fraccion(-2,12,18);
    $y = new Fraccion(1,5,3);
    $res = restarFracciones($x,$y);
    $sum = sumarFracciones($x,$y);
    $mult = multiplicarFracciones($x,$y);
    $div = dividirFracciones($x,$y);

    echo "El resultado de restar <b>"
        . $x->aTexto(). "</b> con <b>"
        . $y->aTexto(). "</b> es  <b>"
        . $res->aTexto(). "</b> forma mixta: <b>"
        . $res->aMixto()->aTexto(). "</b> <br />";

    echo "El resultado de sumar <b>"
        . $x->aTexto(). "</b> con <b>"
        . $y->aTexto(). "</b> es  <b>"
        . $sum->aTexto(). "</b> forma mixta: <b>"
        . $sum->aMixto()->aTexto(). "</b> <br />";

    echo "El resultado de dividir <b>"
        . $x->aTexto(). "</b> con <b>"
        . $y->aTexto(). "</b> es  <b>"
        . $div->aTexto(). "</b> forma mixta: <b>"
        . $div->aMixto()->aTexto(). "</b> <br />";

    echo "El resultado de multiplicar <b>"
        . $x->aTexto(). "</b> con <b>"
        . $y->aTexto(). "</b> es  <b>"
        . $mult->aTexto(). "</b> forma mixta: <b>"
        . $mult->aMixto()->aTexto(). "</b> <br />";*/
    ?>
