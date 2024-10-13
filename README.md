# Pete o Padeiro
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)

## Descrição
Repositório criado para compartilhar minha resolução do teste 'Pete o padeiro'. 

O arquivo 'index.php' contém o código que foi desenvolvido.

## Objetivo do Desafio
Pete adora fazer bolos e tem várias receitas disponíveis, mas ele não é muito bom com matemática. A tarefa é ajudá-lo a descobrir quantos bolos inteiros ele pode fazer com os ingredientes que possui à disposição.

### Regras:
O primeiro parâmetro será um array que representa a receita para fazer um (1) bolo, com os ingredientes e suas respectivas quantidades.

O segundo parâmetro será um array com os ingredientes que Pete tem disponíveis e suas quantidades.

A função deve retornar o número máximo de bolos inteiros que Pete pode fazer usando os ingredientes disponíveis.

### Exemplo: 

````php
// Receita para 1 bolo
$recipe = [
  'flour' => 500,   // farinha
  'sugar' => 200,   // açúcar
  'eggs' => 1       // ovos
];

// Ingredientes disponíveis
$ingredients = [
  'flour' => 1200,  // farinha
  'sugar' => 1200,  // açúcar
  'eggs' => 5,      // ovos
  'milk' => 200     // leite
];

echo cakes($recipe, $ingredients); // Saída: 2
````
