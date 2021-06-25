/************************************************************************
	Programa: Exibe números a cada dez unidades de 0 a 10 e números 
	de 0 a 4.
	Tags: Estrutura Lógica de iteração enquanto e para
 	Autor: Chrystie
 	Data: 28/09/2020
************************************************************************/

public class iteracaoExibir {
	public static void main (String[] args) {
	// saída mensagem
    		System.out.println("Pula de 10 em 10 até 100 ");
    		// laço de repetição para
		for (int cc=0; cc<=100; cc+=10) 
      			// saída números de dez em dez
			System.out.println(cc);
		
		// limpa o valor da variavel	
		int cc=0;
		// laço de repetição enquanto		
		while (cc<=4) 
      		// saída números ++
			System.out.println(cc++);	
	}
}
