/************************************************************************
	Programa: Leitura de número 6 a 10. Exibe tabuada do número digitado. 
	Consistir caso o número seja menor que  6.
	Tags: Estrutura Lógica de iteração (para) e seleção, Scanner
 	Autor: Chrystie
 	Data: 29/09/2020
************************************************************************/

import java.util.Scanner; 

public class 06_tabuadanumero { 

	public static void main (String[] args) { 
		// variáveis
		int resultado;
		// leitor
		Scanner leitor = new Scanner (System.in); 
		// laço de repetição para
		for (int numero=1; numero<=10; numero++) {			 
			// entrada
			System.out.print("Digite um numero de 6 a 10: "); 
			numero = leitor.nextInt(); 
			// estrutura de decisão 	 
			if (numero>=6 && numero<=10) {	 
				for (int contador=1; contador<=10; contador++) { 
					// processamento
					resultado = numero*contador; 
					// saída
					System.out.println(+numero+ "*"+ contador +"= " +numero*contador); 
				}					 
			} 
			else 
				System.out.println("Apenas número de 6 a 10");
			
		} 
		// fim laço de repetição para 
	} 
} 
