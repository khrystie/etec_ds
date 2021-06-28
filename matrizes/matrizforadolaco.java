/**************************************************************************
	Programa: Inserir valores numa matriz quadrada 4x4. Exibir a matriz.
	Tags: Laço de repetição para, matrizes, JOptionPane, Scanner
 	Autor: Chrystie
 	Data: 19/10/2020
**************************************************************************/
// bibliotecas importadas
import javax.swing.JOptionPane;
import java.util.Scanner;

public class matrizforadolaco {
	public static void main (String[] args) {
		
		// variáveis
		int linha=0, coluna=0, i=4,j=4;
		String exibir = " ";
		// matriz
		double matriz[][] = new double [i][j];
		// leitura dos dados
		Scanner entrada = new Scanner(System.in);
		
		System.out.println("Inserindo os dados na Matriz");
		// armazenamento 
		for (linha=0; linha<i; linha++) 
			for (coluna=0; coluna<j;coluna++) {
				System.out.println("Entre com o número" + "\nlinha " + "" + linha + "\ncoluna " + coluna);
				matriz[linha][coluna] = entrada.nextDouble();				
			}
		
		// matriz
		System.out.println("Mostrando os dados na Matriz");
		for (linha=0; linha<i; linha++) {
			for (coluna=0; coluna<j; coluna++) {
				exibir+=matriz[linha][coluna] + " | ";		
			}
			exibir += "\n";
		}				
		// exibir matriz fora do laço
		JOptionPane.showMessageDialog(null, exibir + "\n ");

	}
}
