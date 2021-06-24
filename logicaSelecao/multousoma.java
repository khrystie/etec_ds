/************************************************************************
	Programa: Leitura de dois números inteiros. Se os números são iguais, 
	exibe a soma, senão, a multiplicação dos números.  
  Tag: Estrutura Lógica de Seleção, JOptionPane, try...catch
 	Autor: Chrystie
 	Data: 15/09/2020
************************************************************************/

// biblioteca do JOptionPane
import javax.swing.JOptionPane;

public class desafio_Ag4 {

	public static void main(String[] args) {

		// declare
		int numero1, numero2, soma, mult;
		
		// início try...catch
		try {	
		// mensagem e entrada de dados
		numero1 = Integer.parseInt(JOptionPane.showInputDialog("Digite o primeiro valor: "));
		numero2 = Integer.parseInt(JOptionPane.showInputDialog("Digite o segundo valor: "));
		
			// processamento 
			// cálculos
			soma = numero1 + numero2;
			mult = numero1 * numero2;
		
			// estrutura de decisão
			if (numero1 == numero2)
				//se verdeiro
				JOptionPane.showMessageDialog(null, "Se o primeiro valor é " + numero1 + " e o segundo valor é " +numero2 + ", então o resultado é: " +soma);	
			else  
				// se falsa
				JOptionPane.showMessageDialog(null, "Se o primeiro valor é " + numero1 + " e o segundo valor é " +numero2 + ", então o resultado é: " +mult);		
									
		} catch (NumberFormatException e)
		{ 
			JOptionPane.showMessageDialog(null, "Entre apenas com número inteiro", "E r r o r", JOptionPane.ERROR_MESSAGE);	
		} // fim try-catch

	} // fim main
} // fim class
