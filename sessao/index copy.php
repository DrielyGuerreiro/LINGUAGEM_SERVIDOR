<? php

ini_set ( 'display_errors' ,  1 );
ini_set ( 'display_startup_errors' ,  1 );
relatório_de_erro ( E_ALL );

session_start ();

$ credenciais  =  [ 	0  =>  [ 'usuário'  =>  'driely@senac.br' ,  'pass'  =>  '123456' ],
					1  =>  [ 'usuário'  =>  'joao@senac.br' ,  'pass'  =>  '654321' ],
					2  =>  [ 'usuário'  =>  'fernanda@senac.br' ,  'passar'  =>  '222222' ]];

if  (  isset ( $ _SESSION [ 'login' ])  )  {  // Caso o usuário já está logado no sistema

		incluem  'header_tpl.php' ;
		incluem  'index_menu_tpl.php' ;
		incluem  'footer_tpl.php' ;

}  elseif  (  isset (  $ _POST [ 'entrar' ]  )  )  {  // Caso o usuário tenha acabado de preencher o formulário de login

	$ login  =  $ _POST [ 'login' ];
	$ senha  =  $ _POST [ 'senha' ];

	if  (  in_array (  [ 'user'  =>  $ login ,  'pass'  =>  $ senha ],  $ credenciais )  )  {

		$ _SESSION [ 'login' ]  =  $ login ;

		incluem  'header_tpl.php' ;
		incluem  'index_menu_tpl.php' ;
		incluem  'footer_tpl.php' ;

	}  else  {

		$ msg  =  'Credenciais, tente novamente' ;

		incluem  'index_tpl.php' ;		
	}

}  else  {  // Caso o usuário tenha acabado de chegar no sistema

	incluem  'index_tpl.php' ;
}