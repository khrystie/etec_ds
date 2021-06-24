/************************************************************************
	Programa: Leitura de duas notas de três alunos. Exibe média. 
	Tags: Estrutura Lógica de iteração(Laço de repetição PARA) e 
	seleção, Scanner.
 	Autor: Chrystie
 	Data: 28/09/2020
************************************************************************/
// importa biblioteca do Scanner
import java.util.Scanner;
public class notasMedia {
	
	public static void main (String[] args) {
		// leitor
		Scanner leitor = new Scanner(System.in); // leitor
		// declaração de variáveis
		int nota1, nota2, media;
		// estrutura lógica de iteração para
		for (int i=1; i<=3; i++)	{
      // entrada das notas de cada aluno
			System.out.println("Nota 1: ");
			nota1 = leitor.nextInt();	
			System.out.println("Nota 2: ");
			nota2 = leitor.nextInt();	
			media = (nota1 + nota2)/2;
			// estrutura lógica de seleção 
			if (media>=6) 
				System.out.println("Aluno aprovado! Sua média é: " +media);	
			else 
				System.out.println("Aluno reprovado! Sua média é: " +media);
		}
				
	}
	
}
