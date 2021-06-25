/************************************************************************
	Programa: Entrada de nome e idade para três pessoas. Exibe mensagem
	se é maior de idade ou não para cada uma. 
	Tags: Estrutura Lógica de iteração enquanto-faça, JOptionPane
 	Autor: Chrystie
 	Data: 08/10/2020
************************************************************************/

import javax.swing.JOptionPane;
public class Chrystie_Ag7_DS_I_forum {	
	public static void main (String[] args) {
		// variáveis	
		String nome;
		int idade, i=1;	
		// laço de repetição
		do { 
			// entrada de dados
			nome = JOptionPane.showInputDialog(null,i +"- Nome: ");
			idade = Integer.parseInt(JOptionPane.showInputDialog(null,i +"- Idade: "));
			//estrutura de decisão
			if (idade>18) 	
				JOptionPane.showMessageDialog(null, i+"- Maior de idade");	
			else 
				JOptionPane.showMessageDialog(null,i +"- Menor de idade");
		// contador		
		i++;
		// condição
		} while (i<=3);			
}

}
