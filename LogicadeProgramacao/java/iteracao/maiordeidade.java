/************************************************************************
	Programa: Leitura do nome de dez pessoas e suas respectivas idades. 
	Exibe se é maior de idade ou não.
	Tags: Estrutura Lógica de iteração e decisão, Laço de repetição PARA,  
	JOptionPane, try-catch 
 	Autor: Chrystie
 	Data: 28/09/2020
************************************************************************/

import javax.swing.JOptionPane;

public class maiordeidade {
	public static void main (String[] args) {
	// declaração de variáveis
		String nome;
		int idade;
	// tratamento de erro 
		try {
		
			for (int contador=1; contador<=10; contador++) {
				// entrada de dados
				nome = JOptionPane.showInputDialog(null, +(contador+0) +"- Digite o  nome");
				idade = Integer.parseInt(JOptionPane.showInputDialog(+(contador+0)+"- Digite a idade: "));
				// saída
				// estrutura de decisão	
				if(idade>18) 
					JOptionPane.showMessageDialog(null, "Maior de idade");						
				else 
					JOptionPane.showMessageDialog(null, "Menor de idade");	
			}
			
		} catch (NumberFormatException e){
		JOptionPane.showMessageDialog(null, "Erro: Entrar somente com número inteiro no campo idade!", "Atenção! Erro.", JOptionPane.WARNING_MESSAGE);	
		}
				
	}
}
