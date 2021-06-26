/************************************************************************
	Programa: Exibe a tabuada dos números de 1 a 5.
	Tags: Estrutura Lógica de iteração enquanto e para
 	Autor: Chrystie
 	Data: 08/10/2020
************************************************************************/


public class 07_iteracaoTabuada { 
	public static void main (String[] args) {
		// variáveis
		int numero=1;
		// laço repetição enquanto
		// numeros de 1 a 5
		while (numero<=5) { 
			// laço repetição para
			// multiplica cada numero por 1 a 10
			for (int contador=1; contador<=10; contador++) {
				int resultado = numero*contador;	
				System.out.println(+numero+ "*"+ contador +"= " +numero*contador);	
			}				
			numero++;	
		} 
			
	}
}
