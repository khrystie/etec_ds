/************************************************************************
	Programa: Leitura de 5 números inteiros, exibe a soma a cada 
	iteração e, então, no final, exibe a média.
	Tags: Estrutura Lógica de iteração enquanto, Scanner
 	Autor: Chrystie
 	Data: 08/10/2020
************************************************************************/

import java.util.Scanner;

public class iteracaoExibirSoma {
	public static void main (String[] args) {
		// variáveis
		int i=1, soma=0, media, num;
		// leitura de dados
		Scanner leitor = new Scanner(System.in);
		// laço de repetição enquanto
		while (i<=5) {
			// entrada de dados
			System.out.println(i+"- Digite um número:"); 
			num = leitor.nextInt();
			// processamento
			soma += num;
			// iteração
			i++;
			// saída: soma de cada iteração
			System.out.println("Valor total da soma: " +soma);		
		}
		// processamento: cálculo da média	
		media = soma/5;	
		// saída: resultado 
		System.out.println("Média: " +media);
			
	}
}
