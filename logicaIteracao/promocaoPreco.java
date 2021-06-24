/************************************************************************
	Programa: Leitura do nome de dez produtos e seus respectivos preços. 
	Exibe valor promocional.
	Tags: Estrutura Lógica de iteração(Laço de repetição PARA), Scanner 
 	Autor: Chrystie
 	Data: 28/09/2020
************************************************************************/

import java.util.Scanner;

public class promocaoPreco {
	public static void main(String[] args) {
		// leitor
		Scanner leitor = new Scanner(System.in);
		// declaração variáveis
		String produto;
		double price,resultado;
		
		// laço de repetição para
		for (int contador=1; contador<=10; contador++) {
			// entrada
			System.out.print( +(contador+0)+"-" +" Nome do produto: "); 
			produto = leitor.next();     
			System.out.print("Preço do produto: R$"); 
			price = leitor.nextDouble();                             
			// processamento
			resultado =  price*0.50;
			//saída
			System.out.println("Preço promocional: R$" +resultado +"\n");
		} 
	
	}
 }
