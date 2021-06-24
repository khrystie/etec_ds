/************************************************************************
	Programa: Exibe a soma dos números de 1 a 100 e seu resultado.
	Tags: Estrutura Lógica de iteração(Laço de repetição PARA) 
 	Autor: Chrystie
 	Data: 28/09/2020
************************************************************************/

public class todosnumSoma_A0 {

	public static void main(String[] args) {
		// declaração de variáveis
		// inicia com o valor zero
		int soma = 0; 
		// exibe mensagem 
		System.out.println("Soma de todos números no intervalo de 0 a 100:");
	
		for (int i= 1; i<= 100; i++) {
			/* processamento
			 * somas os numeros de tal forma que 
			 i<- 1 e soma <- 0
			 soma <- soma + i
			 soma <- 0 + 1 então soma <- 1 e i <- 1+1 (2 <=100 V)
			 soma <- 1 + 2 então soma <- 3 e i <- 2+1 (3 <=100 V)
			 soma <- 3 + 3 então soma <- 6 e i <- 3+1 (4 <=100 V)
			 ... 
			 soma <- 4950 + 100 então soma <-5050 i <- 100 + 1 (101<=100F) 
			 */
			soma += i;
      // saída
		  System.out.println(soma); 	 	
    }
    
	}
}
