/************************************************************************
	Programa: Leitura de login e senha. Exibe se acesso é liberado ou não.
  Tag: Estrutura Lógica de Seleção ou Estrutra de Decisão, Scanner
 	Autor: Chrystie
 	Data: 12/09/2020
************************************************************************/

// importa biblioteca
import java.util.Scanner;

public class acessoLogin {

	public static void main(String[] args) {
		// declare
		String login, senha; 
		// leitor de dados
		Scanner leitor = new Scanner (System.in);
		
		
		// entrada de dados
		System.out.println("Entre com o login");
		login = leitor.next();
		System.out.println("Entre com uma senha");
		senha = leitor.next();
		
		// estrutura de decisão
		if  (login.equals("login") && (senha.equals("senha"))) 
			//se atender a condição
			System.out.println("Acesso liberado"); 
		 else 
			//caso contrário
			System.out.println("Acesso não permitido" );
		
	} // final do main

} // final da classe
