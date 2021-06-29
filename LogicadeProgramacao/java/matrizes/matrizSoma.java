/**************************************************************************
	Programa: Inserir valor nas matrizes A e B, somá-las e inserior na matriz
	C. Exibir os valores da matriz C.
	Tags: Laço de repetição para, matrizes, Scanner
 	Autor: Chrystie
 	Data: 19/10/2020
**************************************************************************/

import java.util.Scanner;

public class matrizSoma {

	public static void main (String[] args) {
		// variáveis
		// i: linha da matriz, j: coluna da matriz
		int i=2, j=2;
		int n, m;
		// matrizes
		int MatA [][] = new int [i][j];	
		int MatB [][] = new int [i][j];		
		int MatC [][] = new int [i][j];
		// leitura de dados
		Scanner entrada = new Scanner(System.in);
		
		// armazena dodos na Matriz A
		for (n=0; n<i; n++) {
			for (m=0; m<j; m++) {
				System.out.println("Inserindo os dados na Matriz A ["+(n)+"]["+(m)+"]"); 
				MatA[n][m] = entrada.nextInt();
			}
		} 
		
		// armazena dodos na Matriz B
		for (n=0; n<i; n++) {
			for (m=0; m<j; m++) {		
				System.out.println("Inserindo os dados na Matriz B ["+(n)+"]["+(m)+"]"); 
				MatB[n][m]= entrada.nextInt();	
			}
		}
		
		// processamento 
		// soma MatA + MatB na MatC
		for (n=0; n<i; n++) {
			for (m=0; m<j; m++) {
				MatC[n][m] = MatA[n][m] + MatB[n][m];		
			}		
		}
		
		// exibe MatC 
		for (n=0; n<i; n++) {	
			for (m=0; m<j; m++) {
				System.out.println("C[" + n + "][" + m + "] = " +MatC[n][m]);		
			}		
		}		

	}
} 
