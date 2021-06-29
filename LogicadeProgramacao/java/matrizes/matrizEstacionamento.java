/**************************************************************************
	Programa: Criar matriz para indicar posição dos carros em um 
	estacionamento. Exibir a matriz.
	Tags: Laço de repetição para, matrizes, Scanner
 	Autor: Chrystie
 	Data: 21/10/2020
**************************************************************************/

import java.util.Scanner;

public class matrizEstacionamento {
	public static void main (String[] args) {
		int linha, coluna;
		// leitura de dados
		Scanner entrada = new Scanner (System.in);
		// variáveis
		int i=2, j=4;
		// matriz
		String vaga[][] = new String [i][j];
		// armazenagem 
		for (linha=0; linha<i; linha++)
			for (coluna=0; coluna<j; coluna++) {
				System.out.println("Digite a identificação do carro: \n" + "Posição: ["+ linha +"][" + coluna +"]");
				vaga[linha][coluna] = entrada.nextLine();
			}
		// saída	
		for (linha=0; linha<i; linha++) 
			for (coluna=0; coluna<j; coluna++) 
					System.out.println("Indentificação: " +vaga[linha][coluna]+ " / Posição: "+ "["+linha+"]["+coluna+"]");
		
	}
}
