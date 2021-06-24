/************************************************************************
	Programa: Leitura da idade, exibe a qual fila pertence de acordo
	com a faixa etária. 
  	Tag: Estrutura Lógica de Seleção, JOptionPane
 	Autor: Chrystie
 	Data: 15/09/2020
************************************************************************/

import javax.swing.JOptionPane;

public class 04_faixaEtaria_A0 {

	public static void main(String[] args) {
		
		try {
		
			int idade = Integer.parseInt((JOptionPane.showInputDialog("Digite a idade do usuário: ")));
		
			if (idade>=60) 
				if (idade > 80)  
					JOptionPane.showMessageDialog(null,"Fila 80+");
				else 
					JOptionPane.showMessageDialog(null, "Fila prioritária");						
			else  
				JOptionPane.showMessageDialog(null, "Fila comum");
		
		
		} catch (NumberFormatException e) {
			JOptionPane.showMessageDialog(null, "Apenas números inteiros..", "Eror", JOptionPane.WARNING_MESSAGE);
		}
		
	}
}
		
	


