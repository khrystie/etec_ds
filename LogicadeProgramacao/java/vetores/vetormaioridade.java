/**************************************************************************
	Programa: Inserir os dados nome e idade, cada um num vetor. Exibir se 
	é maior de idade ou menor de idade de acordo com a idade.
	Tags: Laço de repetição para, Scanner, vetores
 	Autor: Chrystie
 	Data: 13/10/2020
**************************************************************************/

import java.util.Scanner;

public class vetormaioridade {

	public static void main (String[] args) {	
		// variáveis	
		String listafinal = null;
		int num = 10;
		// vetores
		String nome[] = new String[num];
		int idade[] = new int[num];
		// leitura de dados
		Scanner leitor = new Scanner(System.in);
		
		// armazenar dados
		for (int i=0; i<num; i++) { 
			System.out.println(i+1 +"- Digite seu nome: "); 
			nome[i] = leitor.next();
			System.out.println(i+1 +"- Digite sua idade: "); 
			idade[i] = leitor.nextInt();
		} 
		
		// exibir dados
		for (int i=0; i<num; i++) {		
			// estrutura de decisão
			if (idade[i]>=18)  
				System.out.println(i+1 + "- " + nome[i] + " idade: " +idade[i] + "\nÉ maior de 18 anos");
			else 
				System.out.println(i+1 + "- " + nome[i] + " idade: " +idade[i] + "\nÉ menor de 18 anos");
		} 
		
	} 
}
