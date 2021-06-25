/************************************************************************
	Programa: Pede-se para digitar sim ou não, caso a resposta seja sim,
	exibe-se a pergunta novamente. Caso contrário, encerra o programa.
	de 0 a 4.
	Tags: Estrutura Lógica de iteração enquanto-faça, Scanner
 	Autor: Chrystie
 	Data: 28/09/2020
************************************************************************/
import java.util.Scanner;

public class iteracaoSim {
	
	public static void main (String[]args) {
		// variaveis
		int iteracao = 0;
		String resposta;
		// leitura de dados
		Scanner leitor = new Scanner(System.in);
		
		do {
			// entrada se continua ou não
			System.out.println((iteracao+1)+"- Digite sim ou não:  ");
			resposta = leitor.next();
					
			iteracao ++;
		}	while (resposta.equals("Sim") || resposta.equals("sim"));
			// enquanto a resposta for sim, continuará perguntando
	
	}
}
