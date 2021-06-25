/************************************************************************
	Programa: Soma das dezenas, centenas, etc. 
	Tags: Estrutura Lógica de iteração enquanto, JOptionPane
 	Autor: Chrystie
 	Data: 08/10/2020
************************************************************************/

import  javax.swing.JOptionPane;
public class iteracaoDezenasSoma {
	public static void main(String[] args) {
		// variáveis	
		int num=0, i=0, soma;
		// entrada número	
		num = Integer.parseInt(JOptionPane.showInputDialog(null,"Insira um número inteiro: "));
		// processamento
		soma = num%10;
		
		// calcular soma das dezenas, centenas, etc
		while (num>0) {
			num /= 10;
			soma = soma + (num%10);
		}
			
		JOptionPane.showMessageDialog(null,soma);
	}
}
