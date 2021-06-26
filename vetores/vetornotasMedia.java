/**************************************************************************
	Programa: Inserir cinco notas do aluno em um vetor. Exibir mensagem
	se aluno foi aprovado de acordo com sua média.
	Tags: Laço de repetição para, Scanner, vetores
 	Autor: Chrystie
 	Data: 12/10/2020
**************************************************************************/

import java.util.Scanner;

public class vetornotasMedia {

	public static void main(String[] args) {
		// variáveis
		int i=0;
		double soma=0;
		double media;
		String recado= "As notas foram: ";
		// vetor
		double[] nota = new double[5];
		// leitura de dados
		Scanner leitor = new Scanner (System.in);
		
		// laço para ler as notas do aluno
		for (i=0; i<5; i++) {		
			System.out.println("Nota " + (i+1) + " do aluno: ");
			nota[i]= leitor.nextDouble();
		}
		
		// armazenamento de cada nota no vetor
		for (i=0; i<5; i++) {
		recado = recado + nota[i] + " ";
		}
		
		// laço para somar as notas do aluno
		for (i=0; i<5; i++) {
			soma= soma + nota[i];
		}
		
		media= soma/5;
		
		// estrutura de decisão
		// mensagem caso aprovado ou reprovado
		if (media>5) 
			System.out.println("Aprovado!" +recado);
		else 
			System.out.println("Reprovado :( " +recado);
			
		
	}
}
