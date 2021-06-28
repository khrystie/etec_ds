/**************************************************************************
	Programa: Digitar três números entre 0 a 38, inserindo-os no vetor.
	Consistir caso não esteja nesse intervalo e exibir a soma dos números 
	divisíveis por quatro.
	Tags: Laço de repetição para e enquanto, vetor, Scanner
 	Autor: Chrystie
 	Data: 13/10/2020
**************************************************************************/

import java.util.Scanner; 

public class vetorconsistirsumDivisivel { 
	public static void main (String[] args) { 
		// variáveis
		int soma = 0, num = 3; 		
		String resultado;
		// leitura de dados
		Scanner leitor = new Scanner(System.in); 
		// vetor
		int numeros[] = new int[num]; 
		
		// armazena n números inteiros no vetor numeros[i] 
		for (int i=0; i<num; i++) {			 
			System.out.println("Digite o " + (i+1) +"º número de 0 a 38: ");
			numeros[i] = leitor.nextInt();  
			// consistir caso valor digitado nõa esteja nesse intervalo
			while (numeros[i]<0 || numeros[i]>38) { 	
				System.out.println("--> Digite apenas número inteiro de 0 a 38. Digite novamente: ");	 
				numeros[i]= new Scanner(System.in).nextInt(); 	
			}	 
			// estrutura de decisão
			// processamento soma dos números divisíveis por quatro
			if (numeros[i] % 4 == 0)  
				soma = soma + numeros[i];  	 
		}  
		// saída 
		System.out.println("A soma dos números divisíveis por 4 deste vetor é: " + soma); 

	}  
} 

 
