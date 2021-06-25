/************************************************************************
	Programa: Exibe número 0 até 10 usando laço de repetição.
	Tags: Estrutura Lógica de iteração enquanto
 	Autor: Chrystie
 	Data: 08/10/2020
************************************************************************/

public class iteracaoExibir {
	public static void main (String[] args) {
		// variáveis
		int i = 0;

		while (i<=10) {
			/* se colocar i++ aqui, aparecem os números de 1 a 10
			 * pois soma-se 1 a variavel i primeiro
			 */
			//exibe cada número 
			System.out.println(i);
			// se não colocar o contador, acontece loop infinito
			i++;	
		}	
		
	}
}
