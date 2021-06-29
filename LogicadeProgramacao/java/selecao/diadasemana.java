/************************************************************************
	Programa: Leitura dos números inteiros de 1 a 7. Exibe o nome do dia 
	da semana de acordo com o número digitado.
  	Tag: Estrutura Lógica de Seleção, JOptionPane, try-catch
 	Autor: Chrystie
 	Data: 15/09/2020
************************************************************************/

// importa biblioteca JOptionPane
import javax.swing.JOptionPane;

public class diadasemana {
	
	public static void main (String[] args) {
		int dias;
		String mensagem;
		
		try { 	
			// entrada de dados mensagem e conversão juntos:  
			//dias = Integer.parseInt(JOptionPane.showInputDialog("dia da semana"));
			mensagem = JOptionPane.showInputDialog("dia da semana: ");
			dias = Integer.parseInt(mensagem);
			
			// estrutura de decisão "encadeada"
			if (dias == 1) { // primeiro if
				JOptionPane.showMessageDialog(null, "Domingo");
				} 
			else { 
				if (dias == 2) { // segundo if
					JOptionPane.showMessageDialog(null, "Segunda-feira");						
				} 
				else {
					if (dias == 3) { // terceiro if
						JOptionPane.showMessageDialog(null, "Terça-feira");						
					} 
					else {
						if (dias == 4) {
							JOptionPane.showMessageDialog(null, "Quarta-feira");
						} 
						else {
							if (dias == 5) {
								JOptionPane.showMessageDialog(null, "Quinta-feira");
							}
							else { 	
								if (dias == 6) {
									JOptionPane.showMessageDialog(null, "Sexta-feira");
								} 
								else {
									if (dias ==7) {
										JOptionPane.showMessageDialog(null, "Sábado");
									}									
									else { 																				
										JOptionPane.showMessageDialog(null, "Número Inválido");		
									}  // senao da sétima condição
								} // senao da sexta condição								
							} // senao da quinta condição
						} // senao da quarta condição
					} // senao da terceira condição
				} // senao da segunda condição
			} // fim primeiro senão
			
			// a estrutura de decisão encadeada "fecha" as chaves
			// da última a ser aberta até a primeira 

		} //fim do try
		// exibir mensagem de erro, caso valor recebido não seja um número inteiro
		catch (NumberFormatException e) { 
			JOptionPane.showMessageDialog(null, "Entre só com número", 
			"E R R O", JOptionPane.ERROR_MESSAGE ); 
			//  WARNING_MESSAGE ponto de exclamação amarelo
		} // fim try-catch	
		
	} // fim da main		
} // fim da classe
