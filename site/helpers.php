<?php 

function base_url() {
	
	if( $_SERVER['SERVER_NAME'] == 'micro-2' ) {
	    define('BASE','http://micro-2:8080/gore/');
	} else if($_SERVER['SERVER_NAME'] == 'redevip.com.br') {
	    define('BASE','https://www.shoppingoutlet.com.br/demo/greentrading4/');
	} else if($_SERVER['SERVER_NAME'] == 'www.shoppingoutlet.com.br') {
	    define('BASE','https://www.shoppingoutlet.com.br/demo/greentrading4/');
	} else if($_SERVER['SERVER_NAME'] == 'www.gore.med.br') {
	    define('BASE','https://www.gore.med.br/');
	} else {
	    define('BASE','https://www.gore.med.br/');
	}
	

	return BASE;
}

function redirect_www() {
	
	if ($_SERVER['SERVER_NAME']!="micro-2" && $_SERVER['SERVER_NAME']!="localhost")  {
		if (substr($_SERVER['HTTP_HOST'], 0, 4) !== 'www.') {
			$protocol = "https://";
		    header('Location: '.$protocol.'www.'.$_SERVER['HTTP_HOST'].'/'.$_SERVER['REQUEST_URI']);
		    exit;
		}
	}
	

}

function redirect_https() {
	 if ($_SERVER['SERVER_NAME']!="micro-2" && $_SERVER['SERVER_NAME']!="localhost") :
		echo "<script>
		  (function() {
		    if(window.location.protocol != 'https:') {
		      location.href =   location.href.replace('http://', 'https://');
		    }
		  })(); 
		</script>";
	 endif;
}


function google_analytics() {
	if ($_SERVER['SERVER_NAME']!="micro-2" && $_SERVER['SERVER_NAME']!="localhost") :
	echo "<!--virgiliocesar_pratica_gmail-->";
	echo "<script async src='https://www.googletagmanager.com/gtag/js?id=G-ZZM00K87PF'></script>
			<script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag('js', new Date());

			  gtag('config', 'G-ZZM00K87PF');
			</script>";
	endif;
}

?>