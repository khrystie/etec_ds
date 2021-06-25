/************************************************************************
	Programa: Exibe números < 10, sendo continue: pula uma iteração, 
	break: encerra bloco.
	Tags: Estrutura Lógica de iteração enquanto e enquanto-faça, break,
	continue
 	Autor: Chrystie
 	Data: 28/09/2020
************************************************************************/

public class pula {

	public static void main (String[] args) {
		int pula = 0;
	
		while (pula<10) {	
			// iteração
			pula++;
			
			if (pula==1 || pula==3 || pula==4)	
				continue;
			else if (pula==7) 
				break;
			// saída
			System.out.println("Pula " +(pula+0));	
		}
		/* 
		 * break encerra quando atende a condição, mas programa continua 
		 * com o valor dessa condição 
		 * caso não seja atribuido valor nulo para a variavel pula aqui
		 * 
		*/
		do {
			/* 
			 * importância da ordem
			 * aqui, como exibe o resultado com o processamento primeiro
			 * exibe o valor de pula e a soma de pula+2  
			 * se não atender a condição, encerra
			 * 
			*/
			System.out.println((pula +"," + (pula+2) ));
			pula++;
			/* 
			 * caso a iteração pula++ seja antes da saídal,
			 * exibe o valor de pula + 1 (iteração) e a soma de pula+2  
			 * se não atender a condição, encerra
			 * 
			*/
		} while (pula<4); 
		
	}
}
