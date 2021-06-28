/**************************************************************************
	Programa: Exibe os valores já atribuídos de uma matriz quadrada 2x2.
	Tags: Laço de repetição para, matrizes, JOptionPane
 	Autor: Chrystie
 	Data: 19/10/2020
**************************************************************************/

import javax.swing.JOptionPane;

public class Chrystie_Ag9_DS_I_apostila_mat_val_predefinido {
	public static void main (String[] args)  {
		/**
		 *  matriz 2x2
	 	 * valores atribuidos
		 * {1,2} linha 0, coluna 0 e 1, respectivamente		 
		 **/
		int mat[][] = { {1,2}, {3,4} };
	
		for (int linha=0; linha<2; linha++) 
			for (int coluna=0; coluna<2; coluna++) 
				JOptionPane.showMessageDialog(null, "Matriz [" +linha +"] coluna [" +coluna +"] = " + mat[linha][coluna]);
			
		JOptionPane.showMessageDialog(null, "Fim!");	
			
	}
}
