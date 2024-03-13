# cria-codigo

# Descrição do repositório
Atraves de um codigo antigo fui adptando  inserindo novas linhas de código. Sendo assim este repositório é um formulário que tem um campo para prencher que no caso são números, o bloco de php no código faz verificações como se o valor inserido pelo usuário é número par ou ímpar, redondo ou não, e se é positivo, negativo ou neutro. Além de verificar ele exibe uma mensagem da verificação.

## Funcionalidades
### Verifica se o número é:
- Par ou ímpar.
- Redondo ou não.
- Positivo, negativo ou neutro.

## Exemplo de Uso
1- O usuário digita um número no campo de preenchimento.  
2- O formulário vai exibir as informações do número como o exemplo o abaixo.  
![img](img/formulario-atv3.png)

## Detalhes das Condições PHP

O código tem comandos em PHP sendo três condições que faz a verificação do numero inserido pelo usuário e exibe uma mensagem com o comando *echo*.  
- **Verificação de Par ou Ímpar:** A condição *if ($num % 2 == 0)* verifica se o número inserido pelo usuário é divisível por 2, ou seja, se é par. Se o resto da divisão por 2 for igual a 0, o número é considerado par. Caso contrário, é considerado ímpar.  
- **Verificação de Número Redondo:** A condição *if ($num % 10 == 0)* verifica se o número inserido pelo usuário é divisível por 10, o que significa que é um número redondo.Se não ele não sera um número redondo.  
- **Verificação de Positivo, Negativo ou Neutro:** As condições *if ($num > 0)* nela mostra que se o numero for maior que zero sera positivo ou *elseif ($num < 0)* que mostra que o numero  menor que zero sera negativo, caso nao seja essas duas opções o valor será neutro(zero).
  
## Fontes de Consulta

- Pesquisei algumas coisas para estilizar, como a tag que centraliza. Para o botão mais arredondado, utilizei o [DevMedia](https://www.devmedia.com.br/css-como-criar-elementos-arredondados/37905) e pesquisei fontes para ver qual combinava com a página, utilizando o [DaFont](https://www.dafont.com/pt/).
- Utilizei um código antigo [código usado](atd2/par.php) que tinha como base a primeira condição de verificação se o valor era (par ou ímpar) e assim fui construindo as demais.
- Utilizei o [ChatGPT](https://chat.openai.com/) para pesquisar sobre números redondos, para conseguir criar as condições.
- Tambem utilizei o [Alura](https://www.alura.com.br/artigos/escrever-bom-readme) para estruturar o README.
