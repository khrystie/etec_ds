/**************************************************************************
	Programa: Inserir notas de alunos na matriz. Exibir cada nota e a média
	de cada um.
	Tags: Laço de repetição para, matrizes, JOptionPane
 	Autor: Chrystie
 	Data: 19/10/2020
**************************************************************************/

import javax.swing.JOptionPane;

public class matriznotasMedia {

	public static void main(String[] args) {

        //declaração de variáveis
        int linha, coluna, numAluno=2, numNota=2;
        double media = 0;
		double notas[][] = new double [numAluno][3];
         
         //mensagem
         JOptionPane.showMessageDialog (null, "Inserindo os dados na Matriz");
         
         // tratamento de erros
	    try {
	    	
	    	// armazenamento de notas dos alunos
	    	for (linha = 0; linha < numAluno; linha++) {
	    		JOptionPane.showMessageDialog(null, (linha+1) + "- Aluno" +"\n");
	    		for (coluna = 0; coluna < numNota; coluna++) {
	    			notas[linha][coluna] = Double.parseDouble(JOptionPane.showInputDialog((linha+1) + "- Aluno" +"\n" + (coluna+1) + "- nota"));
	            }
	    	}
	    	
	    	//cálculo da média
	         for (linha = 0; linha < numAluno; linha++) {
	        	 for (coluna = 0; coluna < numNota; coluna++) {
	                media = media + notas[linha][coluna];
	        	 }
	         notas[linha][numNota] = media/numNota;
	        //atribuindo o valor 0 para iniciar o cálculo da
	         media=0;
	         }
	         
	         //saída mensagem
	         JOptionPane.showMessageDialog (null, "Mostrando as menções");
	         
	         for (linha = 0; linha < numAluno; linha++) {
	        	 for (coluna = 0; coluna < numNota; coluna++) {
	        		 // exibe número aluno e número nota
	        		 JOptionPane.showMessageDialog(null,"Aluno " + (linha+1) + "\n Nota " + (coluna+1) +": " + notas[linha][coluna]);
	        	 }
	        	 //exibe média de aluno
	        	 JOptionPane.showMessageDialog(null, "Média: " + notas[linha][2]);
	        }
	         
	    } catch (NumberFormatException e) {
	    	JOptionPane.showMessageDialog(null, "números\nEncerrando","ERRO",JOptionPane.ERROR_MESSAGE);
	      } //fim do try-catch
		
	}
}
