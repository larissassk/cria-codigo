# Verificador numérico

Este projeto é um formulário web que permite verificar as seguintes propriedades de um número inserido pelo usuário:

- **Par ou ímpar**  
- **Redondo ou não**  
- **Positivo, negativo ou neutro**

Tecnologias utilizadas:  
- **HTML5**: Estrutura da página  
- **CSS**: Estilização  
- **PHP**: Processamento e validação do número


**Exemplo de uso**  
1- Insira um número no campo de preenchimento e envie.  
2- O formulário vai exibir as informações sobre o número inserido.  
![img](img/formulario-atv3.png)

## Condições PHP

O código tem comandos em PHP sendo três condições que faz a verificação do numero inserido pelo usuário e exibe uma mensagem com o comando *echo*.  
- **Verificação de Par ou Ímpar:** A condição *if ($num % 2 == 0)* verifica se o número inserido pelo usuário é divisível por 2, ou seja, se é par. Se o resto da divisão por 2 for igual a 0, o número é considerado par. Caso contrário, é considerado ímpar.  
- **Verificação de Número Redondo:** A condição *if ($num % 10 == 0)* verifica se o número inserido pelo usuário é divisível por 10, o que significa que é um número redondo.Se não ele não sera um número redondo.  
- **Verificação de Positivo, Negativo ou Neutro:** As condições *if ($num > 0)* nela mostra que se o numero for maior que zero sera positivo ou *elseif ($num < 0)* que mostra que o numero  menor que zero sera negativo, caso nao seja essas duas opções o valor será neutro(zero).
  
## Referências

 [DevMedia](https://www.devmedia.com.br/css-como-criar-elementos-arredondados/37905): Estilização e botões arredondados  
- [DaFont](https://www.dafont.com/pt/): Escolha de fontes  
- [ChatGPT](https://chat.openai.com/): Pesquisa sobre números redondos  
- [Alura](https://www.alura.com.br/artigos/escrever-bom-readme): Estrutura do README  
- Código base: [`atd2/par.php`](atd2/par.php)