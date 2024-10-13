<?php
    function cakes($recipe, $ingredients)                         
    {
        $amount_cakes = null;                                                  //Variável que conterá a quantidade de bolos
                                                      
        foreach($recipe as $ingredient => $amount_required)                    //Laço que irá percorrer sobre cada ingrediente da receita
        {
            if(!array_key_exists($ingredient, $ingredients))                   //Verifica se o ingrediente (chave) existe no array de $ingredientes
            {                                                                  //Caso não existir retorna 0
                return 0;                                          
            }

            if($ingredients[$ingredient] < $amount_required)                   //Verifica se a quantidade de ingredientes disponíveis é menor
            {                                                                  // que o necessário, caso for retorna 0 
                return 0;
            }

            if($amount_cakes === null)                                                 //Verifica se a quantidade de bolos é null para incializar a variável 
            {                                                     
                $amount_cakes = (int)($ingredients[$ingredient] / $amount_required);
            }
            else                                                                       //Caso a variável amount_cakes já tenha sido inicalizada 
            {
                $cake = (int)($ingredients[$ingredient] / $amount_required);           //Calcula quantos bolos podem ser feitos com a quantidade atual
                if($cake < $amount_cakes)                                              //Verifica se o cálculo atual resulta em menos bolos  
                {
                    $amount_cakes = $cake;                                             //Atualiza a variável para manter a menor quantidade             
                }
            }   
        }

        return $amount_cakes;                                                          //Retorna o resultado da função
    }   

    // Abaixo estão os casos de uso:
    var_dump(cakes(
    ['flour' => 500, 'sugar' => 200, 'eggs' => 1], 
    ['flour' => 1200, 'sugar' => 1200, 'eggs' => 5, 'milk' => 200]) 
    === 2); 

  
    var_dump(cakes(
    ['apples' => 3, 'flour' => 300, 'sugar' => 150, 'milk' => 100, 'oil' => 100], ['sugar' => 500, 'flour' => 2000, 'milk' => 2000]) 
    === 0); 
  
    var_dump(cakes(
    ['flour' => 500, 'sugar' => 200, 'eggs' => 1], 
    ['flour' => 1500, 'sugar' => 1200, 'eggs' => 5, 'milk' => 200]) 
    === 3);
?>
