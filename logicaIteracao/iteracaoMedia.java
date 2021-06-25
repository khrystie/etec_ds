/************************************************************************
	Programa: Entrada de cinco números inteiros. Exibe a média.
	Tags: Estrutura Lógica de iteração enquanto-faça, JOptionPane
 	Autor: Chrystie
 	Data: 08/10/2020
************************************************************************/

import javax.swing.JOptionPane;

public class iteracaoMedia {

	public static void main(String[] args) {
		// variáveis
		int num, media, soma=0, i=1;
					
		do {
			// entrada de dados
			num = Integer.parseInt(JOptionPane.showInputDialog(i +"- Digite um número: "));
			// processamento
			// ou soma = soma + num
			soma += num;
			// iteração 
			i++;
			} while(i<=5);
			// processamento - cálculo da média
		media = soma/5;
		// saída - resultado		
		JOptionPane.showMessageDialog(null, "A média é: "+media);
	}

}
