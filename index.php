<?php
session_start();

require_once 'libs/CssCaptcha/Facade.class.php';
require_once 'libs/View/Php.class.php';

$view = new View_Php(dirname(__FILE__) . '/data/templates/');

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$check_word = $_SESSION['word'];
	session_unset();
	
	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
	$word = isset($_POST['word']) ? $_POST['word'] : '';
	
	$firstname = trim($firstname);
	$lastname = trim($lastname);
	$word = trim($word);
		
	$word = mb_strtolower($word, 'UTF-8');
	
	$errors = array();
	if ($firstname == '')
	    $errors[] = 'Поле "Ваше имя" не заполнено.';   
	if ($lastname == '')
	    $errors[] = 'Поле "Ваша фамилия" не заполнено.';
    if ($check_word == '' || $word != $check_word)
        $errors[] = 'Поле "Каптча" не заполнено или заполнено неверно.';

    $view->set('firstname', htmlspecialchars($firstname));
    $view->set('lastname', htmlspecialchars($lastname));    

    if (count($errors))
    {
    	$view->set('errors', $errors);  
    }    
    else
    {
    	echo $view->out('success');	
        die();
    }	
}

try
{
    $csscaptcha = new CssCaptcha_Facade();
    $csscaptcha->setMinCountSymbols(3);
    $csscaptcha->setMaxCountSymbols(6);
    $csscaptcha->generate();
}
catch (Exception $e)
{
	header('HTTP/1.1 503 Service Unavailable');
	
	echo $e->getMessage();
	
   	die();
}	

$_SESSION['word'] = $csscaptcha->getWord();
$_SESSION['css'] = $csscaptcha->getCss();
$_SESSION['css_compatible_ie7'] = $csscaptcha->getCssCompatibleIe7();

$view->set('html', $csscaptcha->getHtml());
echo $view->out('form');
?>