/**************************************************************************
	Programa: Inserir salário de cinco funcionários. Exibir a média, os 
	salários maior que a média e sua respectiva posição no vetor.
	Tags: Laço de repetição para, vetor, Scanner
 	Autor: Chrystie
 	Data: 20/10/2020
**************************************************************************/

import java.util.Scanner;

public class 09_mediaPosicao {

	public static void main (String[] main) {
		// variáveis
		double media=0, soma=0;
		int i, funcionarios=5;
		// vetor
		double salario [] = new double [funcionarios];
		// leitura de dados
		Scanner entrada = new Scanner (System.in);
		// armazenagem
		for (i=0; i<funcionarios; i++) {
			System.out.println("Digite o salário do " + (i+1) +"º funcionário:");
			salario[i] = entrada.nextDouble();
			soma += salario[i];
		} 
		// processamento
		media = soma/funcionarios;
		// exibir a média
		System.out.println("A média é: " +media);
		// exibir a qual posição do vetor pertence
		for (i=0; i<funcionarios; i++) 
			if (salario[i]>media) 
				System.out.println(salario[i] + " [" + (i+1) + "]");
						 
	}
}
