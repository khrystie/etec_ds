<?php

	if (!isset($_SESSION)) {
		session_start();
	}

	/*************  PRIMEIRO ACESSO *****************/	

	if (isset($_POST["btnPrimeiroAcesso"])) {
		include_once '../View/primeiroAcesso.php';
	}

	/*************  CADASTRO/OUTROS *****************/	
	else {
		/* Início - Dados Pessoais - Cadastrar */ 
		if (isset($_POST["btnCadastrar"])) {
				require_once '../Controller/UsuarioController.php';
				$uController = new UsuarioController();

				if ($uController->inserir($_POST["txtNome"], $_POST["txtCPF"], $_POST["txtEmail"], $_POST['txtSenha'])) {
					include_once '../View/cadastroRealizado.php';
				} 
				else {
					include_once '../View/cadastroNaoRealizado.php';
				}
			} 
		/* Fim - Dados Pessoais - Cadastrar */ 

		/*************  ATUALIZAR *****************/	

		/* Início - Dados Pessoais - Atualizar */ 
		else if(isset($_POST["btnAtualizar"])) {
			require_once '../Controller/UsuarioController.php';
			$uController = new UsuarioController();
			if($uController->atualizar(
				$_POST["txtID"], 
				$_POST["txtNome"],
				$_POST["txtCPF"], 
				$_POST["txtEmail"],
				date('Y-m-d', strtotime($_POST['txtData'])))) {
				include_once '../View/atualizacaoRealizada.php';
			}
			else {
				include_once '../View/operacaoNaoRealizada.php';
			}								
		}
		/* Fim - Dados Pessoais - Atualizar */ 

		/*************  INSERIR *****************/	
		
		/* Início - Formação Acadêmica - Inserir */ 
		else if(isset($_POST["btnAddFormacao"])) {
			require_once '../Controller/FormacaoAcadController.php';
			include_once '../Model/Usuario.php';
			$fController = new FormacaoAcadController();

			if($fController->inserir(date('Y-m-d', strtotime($_POST['txtInicioFA'])), date('Y-m-d',
			strtotime($_POST["txtFimFA"])), $_POST["txtDescFA"], unserialize($_SESSION['Usuario'])->getID()) !=
			false) {
				include_once '../View/informacaoInserida.php';
			}
			else{
				include_once '../View/operacaoNaoRealizada.php';
			}
		}
		/* Fim - Formação Acadêmica - Inserir */ 

		/* Início - Outras Formações - Inserir */ 
		else if(isset($_POST["btnAddOF"])) {
			require_once '../Controller/OutrasFormacoesController.php';
			include_once '../Model/Usuario.php';
			$fController = new OutrasFormacoesController();

			if($fController->inserir(date('Y-m-d', strtotime($_POST['txtInicioOF'])), date('Y-m-d',
			strtotime($_POST["txtFimOF"])), $_POST["txtDescOF"], unserialize($_SESSION['Usuario'])->getID()) !=
			false) {
				include_once '../View/informacaoInserida.php';
			}
			else{
				include_once '../View/operacaoNaoRealizada.php';
			}
		}
		/* Fim - Outras Formações - Inserir */ 

		/* Início - Experência Profissional - Inserir */ 
		else if(isset($_POST["btnAddEP"])) {
			require_once '../Controller/ExperienciaProfissionalController.php';
			include_once '../Model/Usuario.php';

			$epController = new ExperienciaProfissionalController();

			if($epController->inserir(date('Y-m-d', strtotime($_POST['txtInicioEP'])), date('Y-m-d',
			strtotime($_POST["txtFimEP"])), $_POST["txtEmpEP"], $_POST["txtDescEP"],
			unserialize($_SESSION['Usuario'])->getID()) != false) {
				include_once '../View/informacaoInserida.php';
			}
			else {
				include_once '../View/operacaoNaoRealizada.php';
			}
		}
		/* Fim - Experência Profissional - Inserir */ 

		/*************  EXCLUIR *****************/	

		/* Início - Formação Acadêmica - Excluir */ 
		else if(isset($_POST["btnExcluirFA"])) {
			require_once '../Controller/FormacaoAcadController.php';
			include_once '../Model/Usuario.php';
			
			$fController = new FormacaoAcadController();
			
			if($fController->remover($_POST['id']) == true) {
				include_once '../View/informacaoExcluida.php';
			}
			else {
				include_once '../View/operacaoNaoRealizada.php';
			}
		}
		/* Fim - Formação Acadêmica - Excluir */ 

		/* Início - Outras Formações - Excluir */ 
		else if(isset($_POST["btnExcluirOF"])) {
			require_once '../Controller/OutrasFormacoesController.php';
			include_once '../Model/Usuario.php';
			
			$fController = new OutrasFormacoesController();
			
			if($fController->remover($_POST['id']) == true) {
				include_once '../View/informacaoExcluida.php';
			}
			else {
				include_once '../View/operacaoNaoRealizada.php';
			}
		}
		/* Fim - Outras Formações - Excluir */ 
		
		/* Início - Experência Profissional - Excluir */ 
		else if(isset($_POST["btnExcluirEP"])) {
			require_once '../Controller/ExperienciaProfissionalController.php';
			include_once '../Model/Usuario.php';

			$epController = new ExperienciaProfissionalController();

			if($epController->remover($_POST['idEP']) == true) {
				include_once '../View/informacaoExcluida.php';
			}
			else {
				include_once '../View/operacaoNRealizada.php';
			}
		}
		/* Fim - Experência Profissional - Excluir */ 

		/*************  LOGIN *****************/	

		/* Início - Login */ 
		else if(isset($_POST["btnLogin"])) {
			require_once '../Controller/UsuarioController.php';
			$uController = new UsuarioController();
	
			if($uController->login($_POST['txtLogin'], $_POST['txtSenha'])) {
				include_once '../View/principal.php';
			}
			else {
				include_once '../View/cadastroNaoRealizado.php';
			}
		}
		/* Fim - Login */ 

		/*************  LOGIN ADMINISTRADOR *****************/	
		
		/* Início - Administrador - Login */ 
		else if(isset($_POST["btnLoginADM"])) {
			require_once '../Controller/AdministradorController.php';
			$aController = new AdministradorController();

			if($aController->login($_POST['txtLoginADM'], $_POST['txtSenhaADM'])) {
				include_once '../View/ADMPrincipal.php';
			}
			else{
				
			}
		}

		// caso nada esteja pressionado
		else {
			// botão "cadastrado realizado c/ sucesso" pressionado
			if (isset($_POST["btnCadRealizado"])) {
				include_once '../View/principal.php';
			}
			// caso botão anterior não seja pressionado
			else {
				//  CADASTRO - botão "cadastro não realizado" pressionado
				if (isset($_POST["btnCadNRealizado"])) {
					include_once '../View/primeiroAcesso.php';
				} // CAD, FORM - add, att, del 
				else if(isset($_POST["btnAtualizacaoCadastro"]) 
				|| isset($_POST["btnOperacaoNRealizada"]) 
				|| isset($_POST["btnInfInserir"])
				|| isset($_POST["btnInfExcluir"])) {
					include_once '../View/principal.php';
				}
				// LOGIN ADM  
				else if(isset($_POST["btnADM"])){
					include_once '../View/ADMLogin.php';
				} 

				/************* LISTAR USUÁRIOS CADASTRADOS *****************/
				
				else if(isset($_POST["btnListarCadastrados"]) || isset($_POST["btnVoltarListarCadastrados"])) {
					include_once '../View/ADMListarCadastrados.php';
				}

				/************* VISUALIZAR USUÁRIO CADASTRADO *****************/
				else if(isset($_POST["btnVisualizarCadastro"])) {
					include_once '../View/ADMVisualizarCadastro.php';
					
				}
				
				/************* LISTAR ADMINISTRADORES CADASTRADOS *****************/
				else if(isset($_POST["btnListarADMCadastrados"])) {
					
					include_once '../View/ADMListarAdministradores.php';
				}

				// VOLTAR USER/ADM CADASTRADOS 	
				else if(isset($_POST["btnVoltar"])) {
					include_once '../View/ADMPrincipal.php';
				}

				// exibe formulário de login
				else {
					include_once 'View/login.php';
				}
			}				
		}
	}



?>