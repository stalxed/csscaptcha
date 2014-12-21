<?php
require_once 'libs/CssCaptcha/Font/Abstract.class.php';

/**
 * Шрифт SimpleLetters.
 *
 */
class CssCaptcha_Font_SimpleLetters extends CssCaptcha_Font_Abstract
{
	/**
	 * (non-PHPdoc)
	 *
	 * @see CssCaptcha_Font_Abstract::__construct()
	 */
    public function __construct()
    {
        parent::__construct(array(
    		'a' => array(
    		    array(FALSE, FALSE, FALSE, TRUE, TRUE, TRUE, FALSE, FALSE, FALSE),
    		    array(FALSE, FALSE, TRUE, TRUE, FALSE, TRUE, TRUE, FALSE, FALSE),
    		    array(FALSE, TRUE, TRUE, FALSE, FALSE, FALSE, TRUE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE)
    		),
    		'b' => array(
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE)
    		),
    		'c' => array(
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE)
    		),
    		'd' => array(
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE)
    		),
    		'e' => array(
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE)
    		),
    		'f' => array(
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE)
    		),
    		'g' => array(
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, TRUE, TRUE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE, FALSE),
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE, FALSE)
    		),
    		'h' => array(
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE)
    		),
    		'i' => array(
    		    array(TRUE, TRUE, TRUE, TRUE),
    		    array(FALSE, TRUE, TRUE, FALSE),
    		    array(FALSE, TRUE, TRUE, FALSE),
    		    array(FALSE, TRUE, TRUE, FALSE),
    		    array(FALSE, TRUE, TRUE, FALSE),
    		    array(FALSE, TRUE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE)
    		),
    		'j' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE)
    		),
    		'k' => array(
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, TRUE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, TRUE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE)
    		),
    		'l' => array(
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE)
    		),
    		'm' => array(
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, TRUE, FALSE, FALSE, FALSE, TRUE, TRUE, TRUE),
    		    array(TRUE, TRUE, TRUE, TRUE, FALSE, TRUE, TRUE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, TRUE, TRUE, TRUE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE)
    		),
    		'n' => array(
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, TRUE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, TRUE, TRUE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, TRUE, TRUE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, TRUE, TRUE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, TRUE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE)
    		),
    		'o' => array(
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE)
    		),
    		'p' => array(
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE)
    		),
    		'q' => array(
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, TRUE, TRUE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE, FALSE),
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE, TRUE, TRUE)
    		),
    		'r' => array(
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE)
    		),
    		's' => array(
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE)
    		),
    		't' => array(
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE),
    		    array(FALSE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE, FALSE),
    		    array(FALSE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE, FALSE),
    		    array(FALSE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE, FALSE),
    		    array(FALSE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE, FALSE),
    		    array(FALSE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE, FALSE),
    		    array(FALSE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE, FALSE)
    		),
    		'u' => array(
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE)
    		),
    		'v' => array(
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(FALSE, TRUE, TRUE, FALSE, FALSE, FALSE, TRUE, TRUE, FALSE),
    		    array(FALSE, FALSE, TRUE, TRUE, FALSE, TRUE, TRUE, FALSE, FALSE),
    		    array(FALSE, FALSE, FALSE, TRUE, TRUE, TRUE, FALSE, FALSE, FALSE)
    		),
    		'w' => array(
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE, TRUE, TRUE),
    		    array(TRUE, TRUE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE, TRUE, TRUE),
    		    array(FALSE, TRUE, TRUE, TRUE, FALSE, FALSE, TRUE, TRUE, TRUE, FALSE)
    		),
    		'x' => array(
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(FALSE, TRUE, TRUE, FALSE, FALSE, FALSE, TRUE, TRUE, FALSE),
    		    array(FALSE, FALSE, TRUE, TRUE, FALSE, TRUE, TRUE, FALSE, FALSE),
    		    array(FALSE, FALSE, FALSE, TRUE, TRUE, TRUE, FALSE, FALSE, FALSE),
    		    array(FALSE, FALSE, TRUE, TRUE, FALSE, TRUE, TRUE, FALSE, FALSE),
    		    array(FALSE, TRUE, TRUE, FALSE, FALSE, FALSE, TRUE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE)
    		),
    		'y' => array(
    		    array(TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE),
    		    array(FALSE, TRUE, TRUE, FALSE, FALSE, TRUE, TRUE, FALSE),
    		    array(FALSE, FALSE, TRUE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(FALSE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE, FALSE),
    		    array(FALSE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE, FALSE),
    		    array(FALSE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE, FALSE),
    		    array(FALSE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE, FALSE)
    		),
    		'z' => array(
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE),
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, TRUE, TRUE, FALSE),
    		    array(FALSE, FALSE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE),
    		    array(FALSE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE, FALSE),
    		    array(FALSE, FALSE, TRUE, TRUE, FALSE, FALSE, FALSE, FALSE),
    		    array(FALSE, TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE)
    		)
	    ));

	    $this->min_scale = 1;
	    $this->max_scale = 3;
	    $this->min_square_size = 2;
	    $this->max_square_size = 2;
    }
}
?>