<?php

    function ValidaCPF($cpf){       
         
        switch($cpf){            
            case "00000000000" : return false;
            case "11111111111" : return false;
            case "22222222222" : return false;
            case "33333333333" : return false;
            case "44444444444" : return false;
            case "55555555555" : return false;
            case "66666666666" : return false;
            case "77777777777" : return false;
            case "88888888888" : return false;
            case "99999999999" : return false;
        }

        if(strlen($cpf) != 11){
            return false;
        }

        $n1 = $cpf[0];
        $n2 = $cpf[1];
        $n3 = $cpf[2];
        $n4 = $cpf[3];
        $n5 = $cpf[4];
        $n6 = $cpf[5];
        $n7 = $cpf[6];
        $n8 = $cpf[7];
        $n9 = $cpf[8];
        $n10 = $cpf[9];
        $n11 = $cpf[10];

        $multiplicacao = $n1 * 10 + $n2 * 9 + $n3 * 8 + $n4 * 7 + $n5 * 6 + $n6 * 5 + $n7 * 4 + $n8 * 3 + $n9 * 2;

        $divisao = $multiplicacao * 10 / 11;
        $resto   = $multiplicacao * 10 % 11;

        if ($resto == 10){
            $resto = 0;  
          }
        if ($resto != $n10 ){
            return false;
        }

        $multiplicacao = $n1 * 11 + $n2 * 10 + $n3 * 9 + $n4 * 8 + $n5 * 7 + $n6 * 6 + $n7 * 5 + $n8 * 4 + $n9 * 3 + $n10 * 2;

        $resto   = $multiplicacao * 10 % 11;

        if ($resto != $n11){
            return false;
        }else{            
         return true;
        }

    }

    if (isset($_GET['cpf'])){        
        if(ValidaCPF($_GET['cpf']))
        {
            echo "CPF válido";
        }else{
            echo "CPF inválido";
        }
    }

?>