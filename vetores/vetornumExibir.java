/**************************************************************************
	Programa: Inserir cinco números inteiros em um vetor. Exibir todos os 
	números inseridos nesse vetor.
	Tags: Laço de repetição para, Scanner, vetores
 	Autor: Chrystie
 	Data: 12/10/2020
**************************************************************************/

import java.util.Scanner;

public class vetornumExibir {
	public static void main(String[] args) {
		// variáveis
		int i=0;
		// vetor
		int[] numeros = new int[5];
		// leitura de dados
		Scanner entrada = new Scanner(System.in);
			
		// armazena dados no vetor numeros[i]
		for(i=0; i<5; i++) {
			System.out.println("Digite um número: ");
			numeros[i] = entrada.nextInt();
		}
		// exibe os dados armazenados no vetor		
		for(i=4; i>=0; i--) {
			System.out.println(numeros[i]);
		}
	}
}
