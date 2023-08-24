<?php

    /*
4. (2.5) Elabore um programa que receba uma matriz com o nome e a idade de 15
nadadores e classifique-os em uma das seguintes categorias:
Infantil : 5 a 10 anos; 
Juvenil : 11 a 17 anos; 
 Sênior: 18 anos ou mais
a) Apresente o número de nadadores de cada categoria. Ex: Infantil: n nadadores
b) Apresente o nome dos nadadores por categoria. Ex: Infantil: Nadador1,
Nadador2...Nadador3.
    */

    $nadadores = array(
        'nome' => array("joao", "maria", "pedro", "carlos", "fab", "jo", "ma", "pe", "ca", "fabricio", "joo", "mari", "ped", "car", "fabiana"),
        'idade' => array(5, 6, 11, 18, 20, 5, 6, 11, 18, 20, 5, 6, 11, 18, 20)

    );


    $infantilnome = array();
    $infantil = 0;
    

    $juvenilnome = array();
    $juvenil = 0;
    
    $seniornome = array();
    $senior = 0;


    for ($i=0; $i < sizeof($nadadores['nome']); $i++) { 
        if ($nadadores['idade'][$i] >= 5 && $nadadores['idade'][$i] <= 10) {
            $infantilnome[] = $nadadores['nome'][$i];
            $infantil++;
        }
        
        if ($nadadores['idade'][$i] >= 11 && $nadadores['idade'][$i] <= 17) {
            $juvenilnome[] = $nadadores['nome'][$i];
            $juvenil++;
        }

        if ($nadadores['idade'][$i] >= 18) {
            $seniornome[] = $nadadores['nome'][$i];
            $senior++;
        }

    
    }
    
    echo "infantil quantidade " . $infantil . "<br>";
    for ($i=0; $i < sizeof($infantilnome); $i++) { 
        echo "infantil nome: " . $infantilnome[$i] . "<br>";   
    }

    echo "juvenil quantidade " . $juvenil . "<br>";
    for ($i=0; $i < sizeof($juvenilnome); $i++) { 
        echo "juvenil nome: " . $juvenilnome[$i] . "<br>";   
    }

    echo "senior quantidade " . $senior . "<br>";
    for ($i=0; $i < sizeof($seniornome); $i++) { 
        echo "senior nome: " . $seniornome[$i] . "<br>";   
    }
    


?>