/************************************************************************
	Programa: Leitura da idade, exibe a qual fila pertence de acordo
	com a faixa etária. 
  	Tag: Estrutura Lógica de Seleção, Scanner
 	Autor: Chrystie
 	Data: 14/09/2020
************************************************************************/

//importa biblioteca
import java.util.Scanner;

public class Chrystie_Ag4_DS_I {

	public static void main(String[] args) {
		
		// declare 
		int idade;
			
		// leitor 
		Scanner leitor = new Scanner(System.in);
		
		// entrada de dados
		System.out.println("Digite a idade do usuário");
		idade = leitor.nextInt();

		// estrutura de decisão
		if (idade>=60) 
			// estrutura de decisão encadeada
			// caso atenda a condição
			if (idade > 80)  
				System.out.println("Fila 80+");
			// caso contrário
			 else 
				System.out.println("Fila prioritária");		
		// senão
		 else 
			System.out.println("Fila comum");
						
	}// programação	 fim do main	
} // programa fim da classe
