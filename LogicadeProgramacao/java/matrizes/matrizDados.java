/**************************************************************************
	Programa: Inserir os dados nome, cidade e estado na matriz. Exibi-los.
	Tags: Laço de repetição para, matrizes, concat, Scanner
 	Autor: Chrystie
 	Data: 19/10/2020
**************************************************************************/

import java.util.Scanner;

public class matrizDados {
	public static void main (String[] args) {
		// variáveis
		int n,m;
		String saida = "Nome: ";
		// matriz
		String info [][] = new String [4][3];
		// leitura de dados
		Scanner entrada = new Scanner(System.in);
		// armazena dados
		for (n=0; n<4; n++) {
			System.out.print("Digite seu nome: ");
			info[n][0] = entrada.next(); 
			System.out.print("Digite sua cidade: ");
			info[n][1] = entrada.next();
			System.out.print("Digite seu estado: ");
			info[n][2] = entrada.next();
		}
		// exibe dados
		for (n=0; n<4; n++) {
			for (m=0; m<3; m++){
				saida = saida.concat(info[n][m]);
				if (m==0) {
					saida = saida.concat("\nCidade: ");
					if (m==1) {
						saida = saida.concat("\nEstado: ");
					}
				}			
			}
		System.out.println("Dados: \n" + saida);
		saida = "Nome ";
		}
	
	}
}
