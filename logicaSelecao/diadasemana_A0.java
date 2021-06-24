/************************************************************************
	Programa: Leitura dos números inteiros de 1 a 7. Exibe o nome do dia 
	da semana de acordo com o número digitado.
  	Tag: Estrutura Lógica de Seleção, JOptionPane, try-catch
 	Autor: Chrystie
 	Data: 15/09/2020
************************************************************************/

import javax.swing.JOptionPane;

public class diadasemana_A0 {
	
	public static void main (String[] args) {
		
		int dias;
		
		try { 	
			dias = Integer.parseInt(JOptionPane.showInputDialog("dia da semana"));
			
			/* 
			 	Como as linhas são simples e de fácil entendimento,
			 	não foram usadas as chaves. 
			 	Para auxiliar na visualização e no entendimento do código,
			 	foi utilizada a identação.
			 */
			
			if (dias == 1)  
				JOptionPane.showMessageDialog(null, "Domingo");
			else  
				if (dias == 2) 
					JOptionPane.showMessageDialog(null, "Segunda-feira");									 
				else 
					if (dias == 3) 
						JOptionPane.showMessageDialog(null, "Terça-feira");						
					else 
						if (dias == 4) 
							JOptionPane.showMessageDialog(null, "Quarta-feira");
						else 
							if (dias == 5) 
								JOptionPane.showMessageDialog(null, "Quinta-feira");
							else 
								if (dias == 6) 
									JOptionPane.showMessageDialog(null, "Sexta-feira");
								else 
									if (dias ==7)
										JOptionPane.showMessageDialog(null, "Sábado");
									else 																				
										JOptionPane.showMessageDialog(null, "Número Inválido");		
		}
		
		catch (NumberFormatException e) { 
			JOptionPane.showMessageDialog(null, "Entre só com número", "E R R O", JOptionPane.ERROR_MESSAGE ); 
		}	
		
	} 
	
} 
