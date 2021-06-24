/************************************************************************ 
	Programa: Leitura dos dados nome, telefone e notas. Exibe os dados e a 
	média.
	Tag: Estrutra Lógica de Sequência, Scanner
 	Autor: Chrystie
 	Data: 07/09/2020
************************************************************************/

// importa biblioteca 
import java.util.Scanner;


public class ChrystieAkemiTakagiKurashima_Ag3_DS_I {

	public static void main(String[] args) {

		// declare
		String Nome, Serie, Telefone;
		Float Nota1, Nota2, Nota3, Nota4, MediaNotas;
		// leitor 
		Scanner leitor = new Scanner(System.in);

		
		// entrada de dados	
		System.out.print("Nome: ");
		Nome = leitor.nextLine();
	
		System.out.print("Telefone: ");
		Telefone = leitor.nextLine();
		
		System.out.print("Série: ");
		Serie = leitor.nextLine();
		
		System.out.print("Nota 1: ");
		Nota1 = leitor.nextFloat();

		System.out.print("Nota 2: ");
		Nota2 = leitor.nextFloat();

		System.out.print("Nota 3: ");
		Nota3 = leitor.nextFloat();

		System.out.print("Nota 4: ");
		Nota4 = leitor.nextFloat();
		
		// processamento
		// cálculo da média
		MediaNotas = (Nota1+Nota2+Nota3+Nota4)/4;
		
		// saída
		System.out.println("--------------------------- Técnico em DS EaD ---------------------------------");
		System.out.println("Nome: " + Nome);
		System.out.println("Telefone: " + Telefone);
		System.out.println("Série: " + Serie);
		System.out.println("-------------------------------------------------------------------------------");

		System.out.println("Média: " + MediaNotas);
		
		System.out.println("-------------------------------------------------------------------------------");
		
		
	}

}
