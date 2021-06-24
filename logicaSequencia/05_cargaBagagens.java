/************************************************************************
	Programa: Leitura do nome do voo e do peso de dez bagagens. Exibe o
	numero do voo, total e o peso médio da carga. 
  	Tags: Estrutura Lógica de Sequência, JOptionPane, try-catch
 	Autor: Chrystie
 	Data: 21/09/2020
************************************************************************/

import javax.swing.JOptionPane;

public class 05_cargaBagagens.java{
	
	public static void main (String[] args) {
		// declaração de variáveis
		double bag1,bag2,bag3,bag4,bag5,bag6,bag7,bag8,bag9,bag10,
		total_carga, med_carga;
		
		try {
			//entrada do nome do voo
			String voo_nome = JOptionPane.showInputDialog(null, "Número do voo: ", "Atenção: Apenas número inteiro!", JOptionPane.INFORMATION_MESSAGE);
			// entrada do peso das bagagens 
			 bag1 = Double.parseDouble(JOptionPane.showInputDialog(null,"Peso da bagagem nº1 em kg: "));
			 bag2 = Double.parseDouble(JOptionPane.showInputDialog(null,"Peso da bagagem nº2 em kg: "));
			 bag3 = Double.parseDouble(JOptionPane.showInputDialog(null,"Peso da bagagem nº3 em kg: "));
			 bag4 = Double.parseDouble(JOptionPane.showInputDialog(null,"Peso da bagagem nº4 em kg: "));
			 bag5 = Double.parseDouble(JOptionPane.showInputDialog(null,"Peso da bagagem nº5 em kg: "));
			 bag6 = Double.parseDouble(JOptionPane.showInputDialog(null,"Peso da bagagem nº6 em kg: "));
			 bag7 = Double.parseDouble(JOptionPane.showInputDialog(null,"Peso da bagagem nº7 em kg: "));
			 bag8 = Double.parseDouble(JOptionPane.showInputDialog(null,"Peso da bagagem nº8 em kg: "));
			 bag9 = Double.parseDouble(JOptionPane.showInputDialog(null,"Peso da bagagem nº9 em kg: "));
			 bag10 = Double.parseDouble(JOptionPane.showInputDialog(null,"Peso da bagagem nº10 em kg: "));
	
			// processamento
			// cálculo da soma do peso total das bagagens
			total_carga = bag1 + bag2 + bag3 + bag4 + bag5 + bag6 + bag7 + bag8 + bag9 + bag10;
			// cálculo da média
			med_carga = total_carga/10;
		
			// saída
			JOptionPane.showMessageDialog(null,"Nome do voo: " +voo_nome + "\n\nSendo a carga total: " +total_carga +"kg"+ "\n\nAs bagagens têm em média: " +med_carga +"kg" );

		} catch (NumberFormatException e) {
      JOptionPane.showMessageDialog(null, "Inserir apenas números inteiros", "Erro", JOptionPane.ERROR_MESSAGE);
		}

	}

}
