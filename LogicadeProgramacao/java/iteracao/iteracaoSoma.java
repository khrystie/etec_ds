/************************************************************************
	Programa: Entrada de números até que não se queira continuar mais.
	Exibe a soma de todos os números inseridos.
	Tags: Estrutura Lógica de iteração enquanto-faça, Scanner
 	Autor: Chrystie
 	Data: 28/09/2020
************************************************************************/

import java.util.Scanner;

public class iteracaoSoma {
	public static void main (String[] args) {
		// declaração de variáveis
		int numero, soma;
		numero=soma=0;
		String resposta;

		//leitor
		Scanner leitor = new Scanner (System.in);

		do {
			// entrada
			System.out.println("Digite um número para somar: ");
			numero = leitor.nextInt();
			// iteração
			soma += numero;
			// entrada para continuar ou não 
			System.out.println("Quer continuar? [S/N]");
			resposta = leitor.next();
		} while (resposta.equals("S")); 
		// saída - resultado da soma
		System.out.println("A soma de todos os valores é: " +soma);	
		
	}
}
