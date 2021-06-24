/************************************************************************
	Programa: Leitura de login e senha. Exibe se acesso é liberado 
	ou não.
	Tag: Estrutura Lógica de Seleção, JOptionPane
 	Autor: Chrystie
 	Data: 12/09/2020
************************************************************************/

// importa biblioteca
import javax.swing.JOptionPane;

public class JOErrorMsg_equals {

	public static void main(String[] args) {
		// declaração de variáveis
		String login, senha; 
		
		// saída mensagem e entrada de dados
		login = JOptionPane.showInputDialog("Entre com um nome");
		senha = JOptionPane.showInputDialog("Entre com uma senha");

		// estrutura de decisão
		if  (login.equals("login") && (senha.equals("senha"))) 
			JOptionPane.showMessageDialog(null, "Acesso liberado"); 
		else 
			JOptionPane.showMessageDialog(null, "Acesso não permitido" );
			
	}

} 
