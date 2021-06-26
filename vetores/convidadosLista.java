/************************************************************************
	Programa: Inserir nome de dez convidados. Exibir lista dos nomes dos
	convidados.
	Tags: Laço de repetição para, JOptionPane, vetores
 	Autor: Chrystie
 	Data: 12/10/2020
************************************************************************/

import javax.swing.JOptionPane;

public class convidadosLista {
	public static void main(String[] args) {
		// declaração de variáveis
		int contador = 0, num=10;
		// variável com a mensagem fixa
		String listafinal = "Os convidados da festa são: "; 
		// vetor convidados: dez posições
		String[] convidados = new String[num];
		
		// laço de repetição para
		// sempre iniciar contador com zero para o vetor
		for (contador =0;contador<num;contador ++) {
			convidados[contador]=JOptionPane.showInputDialog("Digite o " + (contador+1) + " convidado"); 
		}

		for(contador = 0; contador <num; contador ++) {
			listafinal = listafinal + convidados[contador] + " ";
			/* listafinal <- "Os convidados da festa são"  (contador 0)
			 * listafinal <- "Os convidados da festa são", a (contador 1<3 V)
			 * listafinal <- "Os convidados da festa são", a, b (contador 2<3 V)
			 * listafinal <- "Os convidados da festa são", a, b, c (contador 3<3 F)
			 * como a variável listafinal e convidados são string, 
			 * apenas concatena
			 * como convidados é vetor, armazena o nome em cada posição, um a um.
			 */
		} 
			
		//exibição dos dados armazenados em listafinal. 
		JOptionPane.showMessageDialog(null, listafinal);
		
	}	
}
		
