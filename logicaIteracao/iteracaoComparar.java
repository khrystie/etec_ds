/************************************************************************
	Programa: Entrada de um número inteiro e seus valores. Exibe o maior
	número.  
	Tags: Estrutura Lógica de iteração enquanto, Scanner
 	Autor: Chrystie
 	Data: 08/10/2020
************************************************************************/

import java.util.Scanner;

public class Chrystie_Ag7_DS_I_apostila_exerc3 {
	
	public static void main (String[] args) {
		// declaração de variáveis
		int i=0, num, compara, x=2, maior;
		// leitura de dados
		Scanner entrada = new Scanner(System.in);
		
		// entrada
		System.out.print("Digite quantos números você quer comparar: "); 
		compara = entrada.nextInt();
		System.out.print("Digite o primeiro número: ");	
		maior = entrada.nextInt();
		// laço de repetição enquanto
		while (x <= compara) {
			// entrada cada valor
			System.out.print("Digite o " +x +"º número: " );
			num = entrada.nextInt();
			/* estrutura de decisão
			 * a cada iteração
			 * compara se o numero digitado é maior que o anterior
			 * salva o maior numero
			 */
			if (num>maior) 
				maior = num;
			// iteração
			x++;
			// saída 
			System.out.println("O maior digitado foi: " +maior);
		}
		
	}

}
