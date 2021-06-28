/**************************************************************************
	Programa: Digitar  números  inserindo-os na matriz notas.Exibir as 
	notas de cada aluno.
	divisíveis por quatro.
	Tags: Laço de repetição para, matrizes, Scanner
 	Autor: Chrystie
 	Data: 19/10/2020
**************************************************************************/

import java.util.Scanner;

public class Chrystie_Ag9_DS_I_apostila_exerc1 {
	public static void main (String[] args) {
		// variáveis
		int numAlunos= 2, numNotas=2;
		int linAluno, colNotas;

		// matriz notas
		double notas [][] = new double [numAlunos][numNotas];

		// leitura de dados
		Scanner entrada = new Scanner(System.in);

		// entrada das notas
		// armazenamento das notas na matriz
		for (linAluno=0; linAluno<numAlunos; linAluno++) {			
			for (colNotas=0; colNotas<numNotas; colNotas++) {
				System.out.println("Digite as notas do " + (linAluno+1) + "º aluno"); 
				notas[linAluno][colNotas] = entrada.nextDouble();
			}			
		}
		
		// saída notas dos alunos
		System.out.println("\nNotas de cada aluno \n");
		for (linAluno=0; linAluno<numAlunos; linAluno++) {
			// cada aluno (linha)
			System.out.println("Notas do " +(linAluno+1)  +"º aluno: ");
			// cada nota (coluna)
			for (colNotas=0; colNotas<numNotas; colNotas++) {
				System.out.println((colNotas+1) +"ª nota: " +notas[linAluno][colNotas]); 
			}
			System.out.println("\n");
		}
			
	}
}
