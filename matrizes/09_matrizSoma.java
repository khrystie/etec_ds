/**************************************************************************
	Programa: Inserir numa matriz quadrada de 10x10 números inteiros. Exibir
	a soma de todos os números da matriz.
	Tags: Laço de repetição para, matrizes, Scanner
 	Autor: Chrystie
 	Data: 20/10/2020
**************************************************************************/

import java.util.Scanner;

public class 09_matrizSoma {

	public static void main(String[] args) {
	// variáveis
	int linha, coluna;
	int soma=0, i=10, j=10;
	// matriz
	int matriz [][] = new int [i][j]; 
	// leitura de dados
	Scanner numeros = new Scanner(System.in);
	// armazenagem dos dados
	for (linha=0; linha<i; linha++)
		for (coluna=0; coluna<j; coluna++) {
			System.out.println("Digite um número [" + linha + "][" + coluna +"]");
			matriz[linha][coluna] = numeros.nextInt();
		}
	// processamento soma dos números
	for (linha=0; linha<i; linha++) 
		for (coluna=0; coluna<j; coluna++) 
			soma += matriz[linha][coluna];
	// exibir resultado da soma 
	System.out.println("Resultado da soma: " +soma);
	
	}
}
