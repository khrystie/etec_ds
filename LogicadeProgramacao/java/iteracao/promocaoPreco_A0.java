/************************************************************************
	Programa: Leitura do nome de dez produtos e seus respectivos preços. 
	Exibe valor promocional no terminal.
	Tags: Estrutura Lógica de iteração(Laço de repetição PARA), 
	JOptionPane, try-catch 
 	Autor: Chrystie
 	Data: 28/09/2020
************************************************************************/

import javax.swing.JOptionPane;

public class promocaoPreco_A0 {
	public static void main (String[] args) {
		// declaração de variáveis
		String produto;
		double price;
		//tratamento de erros
		try {
			// laço de repetição para
			for (int i=1; i<=10; i++) {
				// entrada de dados
				produto = JOptionPane.showInputDialog(null,"Produto " +(i+0) +": ");
				price = Double.parseDouble(JOptionPane.showInputDialog(null,"Preço " +(i+0) +":"));	
				// saída de dados com processamento 
				System.out.println("Nome do produto "+(i+0)+": " + produto);
				System.out.println("Preço promocional: R$" +price*0.50	+"\n");	
			}
			
		} catch (NumberFormatException e) {
			JOptionPane.showMessageDialog(null, "Entrar apenas com números", "E r r o", JOptionPane.ERROR_MESSAGE);
		}
			
	}
}
