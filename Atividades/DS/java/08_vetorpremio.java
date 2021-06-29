/**************************************************************************
	Programa: Digitar três números entre 0 a 38, inserindo-os no vetor.
	Consistir caso não esteja nesse intervalo. Exibir a somar dos números
	divisíveis por quatro e a dividisão do resultado por três. De acordo
	com a condição, exibir se ganhou prêmio ou não.
	Tags: Laço de repetição para e enquanto, else if, vetor, Scanner
 	Autor: Chrystie
 	Data: 13/10/2020
**************************************************************************/

import java.util.Scanner;

public class 08_vetorpremio {

	public static void main(String[] args) {
		// variáveis
		int soma=0, resultado=0;
		// vetor
		int numeros[] = new int[3];
		// leitura de dados
		Scanner leitor = new Scanner(System.in);
		// laço de repetição para digitar três números
		for (int i=0; i<=2; i++) {			
			System.out.println("Digite o " + (i+1) +"º número de 0 a 38: "); 
			numeros[i] = leitor.nextInt();
			// consistir
			while (numeros[i]<0 || numeros[i]>38) {
				System.out.println("--> Digite apenas número inteiro de 0 a 38. Digite novamente: ");	
				numeros[i]= new Scanner(System.in).nextInt();
			}	
			// estrutura de decisão
			// processamento
			if (numeros[i] % 4 == 0) {
				soma = soma + numeros[i]; 
				resultado = soma/3;								
			}					
		} 
		// mensagens saída
		String texto1 = "Soma dos números divisíveis por 4: " ;
		String texto2 = "\nDivisão da soma por 3: " ;
		
		// exibir de acordo com condição
		if (resultado>25) {
			System.out.println(texto1 + soma + texto2 +resultado +"\nVocê ganhou o prêmio máximo!");
		} 
		else if (resultado>=20 && resultado<=25) {
			System.out.println(texto1 + soma + texto2 +resultado + "\nVocê ganhou o prêmio comum!");
		} 
		else {
			System.out.println(texto1 + soma + texto2 +resultado + "\nVocê não ganhou nenhum prêmio =(");
		}
		
	}
}
