/************************************************************************
	Programa: Leitura da idade do cliente e exibe o valor do plano de 
	saúde de acordo com a idade inserida.
	Tags: Estrutura Lógica de Seleção (else if), JOptionPane, try-catch
 	Autor: Chrystie
 	Data: 22/09/2020
************************************************************************/
// importa biblioteca do JOptionPane
import javax.swing.JOptionPane;

public class planoSaude {
	public static void main (String[] args) {
		// tratamento de erro
		try {
		// leitura da idade do cliente
			int idade = Integer.parseInt(JOptionPane.showInputDialog(null, "Insira a idade do cliente: "));
	
			// processamento - estrutura de decisão
			if (idade>=0 && idade<10) 
				JOptionPane.showMessageDialog(null, "R$280,00");				
			else if(idade>=10 && idade<=30 ) 
				JOptionPane.showMessageDialog(null, "R$250");		
			else if(idade>=40 && idade<=60) 
				JOptionPane.showMessageDialog(null, "R$295");
			else if(idade>60) 
				JOptionPane.showMessageDialog(null, "R$330");		
			else  
				JOptionPane.showMessageDialog(null, "Não foi encontrado valor para esta idade");	
			
		} catch (NumberFormatException e) {
			JOptionPane.showMessageDialog(null, "Apenas número inteiro", "Atenção", JOptionPane.ERROR_MESSAGE);
		}
		
	} // fim da main
}  // fim da classe
