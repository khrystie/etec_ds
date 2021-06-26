/************************************************************************
	Programa: Pesquisa com 5 pessoas de qual elevador é o mais usado.
	Exibe a escolha de cada uma das pessoas e o mais frequentado no final.
	Tags: Estrutura Lógica de iteração enquanto e para, switch-case,
	Scanner
 	Autor: Chrystie
 	Data: 08/10/2020
************************************************************************/

import java.util.Scanner;

import javax.swing.JOptionPane;

public class 07_elevador {

	public static void main(String[] args) {
	// declaração de variáveis
	String elevador, turno;
	int i=1 , a=0, b=0, c=0, m=0, v=0, n=0;
	// leitura de dados
	Scanner entrada = new Scanner (System.in);

	while (i<=5)	{
		// entrada de dados
		System.out.print("\n[" +i +"] Qual o elevador mais utilizado? Opções: A, B ou C: "); elevador = entrada.nextLine();
		System.out.print("[" +i +"] Qual o período mais utilizado? Opções: M(manhã), V(vespertino) ou N(noite): "); turno = entrada.nextLine();
		// estrutura de decisão utilizando switch case
		// escolha do elevador
		switch (elevador) {
			case "A":
			a= a+1;
			System.out.println("["+i +"] Você escolheu A");
			break;
		
		case "B":
			System.out.println("[" +i +"] Você escolheu B");
			b= b+1;
			break;
		
		case "C":
			c= c+1;
			System.out.println("[" +i +"] Você escolheu C");
			break;		
		 
		default:
			// saída da escolha do elevador
			System.out.println("--> Para o elevador, escolha apenas A, B ou C. ");
			break;
		}		
	
		// escolha do turno
		switch (turno) {
			case "M":
				m= m+1;
				System.out.println("[" +i +"] Você escolheu M");
				break;
			case "V":
				v= v+1;
				System.out.println("[" +i +"] Você escolheu V");
				break;
			case "N":
				n= n+1;
				System.out.println("[" +i +"] Você escolheu N");
				break;
			default:
		// saída da escolha do turno
		System.out.println("--> Para o período, escola apenas M, V ou N");
		break;
	}		
	
	// estrtura de decisão elevador
	if (a>b && a>c)  {
		System.out.print("\tO elevador mais usado é o A! " + "("+ a +") usuários. " ); 
		
			if (m>v && m>n) {
				System.out.println("O período mais frequentado é de manhã. " + "("+ m +") usuários" ); 
			}	else if (v>m && v>n) {
					System.out.println("O período mais frequentado é o vespertino. " + "("+ v +") usuários");
				}	else if (n>m && n>v) {
						System.out.println("O período mais frequentado é o noturno. " + "("+ n +") usuários");					
					} 

		} else if (b>a && b>c) {
			System.out.print("\tO elevador mais usado é o B!" + "\n\t("+ b +") usuários");
			
				if (m>v && m>n) {
					System.out.println("\tO período mais frequentado é de manhã." + "\n\t("+ m +") usuários" ); 
				}	else if (v>m && v>n) {
						System.out.println("\tO período mais frequentado é o vespertino. " + "\n\t("+ v +") usuários");
					}	else if (n>m && n>v) {
							System.out.println("\tO período mais frequentado é o noturno. " + "\n\t("+ n +") usuários");
						} 
			
			} else if (c>a && c>b) {
				System.out.println("\tO elevador mais usado é o C!" + "\n\t("+ c +") usuários");
				
					if (m>v && m>n) {
						System.out.println("\tO período mais frequentado é de manhã." + "\n\t("+ m +") usuários" ); 
					}	else if (v>m && v>n) {
							System.out.println("\tO período mais frequentado é o vespertino. " + "\n\t("+ v +") usuários");
						}	else if (n>m && n>v) {
								System.out.println("\tO período mais frequentado é o noturno. " + "\n\t("+ n +") usuários");
							} 
			} 
	
	// estrutura de decisao periodo e a que elevador pertence
	// período mais usado e a que elevador pertence
	if (m>v && m>n) {
		System.out.print("\tO período mais usado é de manhã ");
		
		
		if (a>b && a>c) {
			System.out.println("e pertence ao elevador A.");
		}	else if (b>a && b>c) {
				System.out.print("e pertence ao elevador B.");
			}	else if (c>a && c>b) {
					System.out.print("e pertence ao elevador  C.");
				}		
		
	} else if (v>m && v>n) {
		System.out.print("\tO período mais usado é o vespertino ");

		
		if (a>b && a>c) {
			System.out.println("e pertence ao elevador A.");
		}	else if (b>a && b>c) {
				System.out.print("e pertence ao elevador B.");
			}	else if (c>a && c>b) {
					System.out.print("e pertence ao elevador  C.");
				}
	
	}  else if (n>m && n>v) {
		System.out.print("\tO período mais usado é o noturno ");

		
		if (a>b && a>c) {
			System.out.println("e pertence ao elevador A.");
		}	else if (b>a && b>c) {
				System.out.print("e pertence ao elevador B.");
			}	else if (c>a && c>b) {
					System.out.print("e pertence ao elevador  C.");
				}
	
	}	
	
	
		i++; // incremento				

		
		
	} // fim while
		
	
	
	} // fim da main

} // fim da class
