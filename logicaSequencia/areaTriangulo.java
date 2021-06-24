/************************************************************************
	Programa: Leitura das medidas da base e altura de um triângulo. Exibe
  área do triângulo.
  Tag: Estrutura Lógica de Sequência, Scanner
 	Autor: Chrystie
 	Data: 07/09/2020
************************************************************************/

// importa biblioteca
import java.util.Scanner;

public class Area_do_Triangulo {

	public static void main(String[] args) {
		
		//declaração das variáveis
		float base, altura;
		
		//leitor de dados
		Scanner leitor = new Scanner(System.in);
		
		//entrada de dados
		System.out.println("Programa - Área do Triângulo");
		System.out.println("Observação: Considerar a medida dos lados em metro.");
		System.out.print("Medida da base: ");
		base = leitor.nextFloat();		
		System.out.print("Medida da altura: ");
		altura = leitor.nextFloat();	
		
		//processamento
		//cálculo da área do triângulo
		float Calculo = (base*altura)/2;  
		
		// saída
		System.out.print("A área do triângulo é " + Calculo + " m².");
		

		
	}

