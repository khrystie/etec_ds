/**************************************************************************
	Programa: Inserir cinco números inteiros em um vetor. Caso número seja
	divisível por dois, exibe-se o dobro do valor do número. Caso contrário,
	exibe o valor digitado.
	Tags: Laço de repetição para, Scanner, vetores, String.valueOf
 	Autor: Chrystie
 	Data: 12/10/2020
**************************************************************************/

import java.util.Scanner;

public class vetornumDivisivel {
	public static void main(String[] args) {
		// variáveis
		int i=0;	
		int mult;
		String saida;
		saida = "O resultado é: ";
		// vetor
		int[] numero = new int[5];
		// leitura de dados
		Scanner entrada = new Scanner(System.in);
		// laço de repetição para 
		// armazenamento dos dados no vetor
		for (i=0; i<5; i++) {
			System.out.print(i+1 + "- Digite um número: "); 
			numero[i]= entrada.nextInt();
		}
		// laço de repetição para - processamento e saída	
		for (i=0; i<5; i++) {
			if (numero[i] % 2 == 0) {
				mult = numero[i] * 2;
				saida = saida + String.valueOf(mult) + " ";
			} else {
				saida = saida + String.valueOf(numero[i]) + " ";
			}	
		}
		// exibe saída resultado		
			System.out.print(saida);
	}
}
