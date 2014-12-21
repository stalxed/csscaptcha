<?php
require_once 'libs/CssCaptcha/Font/Abstract.class.php';

/**
 * Шрифт RussianDigits.
 *
 */
class CssCaptcha_Font_RussianDigits extends CssCaptcha_Font_Abstract
{
	/**
	 * (non-PHPdoc)
	 *
	 * @see CssCaptcha_Font_Abstract::__construct()
	 */
    public function __construct()
    {
        parent::__construct(array(
    		'0' => array(
    		    array(FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE)
    		),
    		'1' => array(
    		    array(FALSE, FALSE, FALSE, FALSE),
    		    array(FALSE, TRUE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE),
    		    array(FALSE, TRUE, FALSE, FALSE),
    		    array(FALSE, TRUE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE)
    		),
    		'2' => array(
    		    array(FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE)
    		),
    		'3' => array(
    		    array(FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE),
    		    array(FALSE, TRUE, TRUE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE)
    		),
    		'4' => array(
    		    array(FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE)
    		),
    		'5' => array(
    		    array(FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE)
    		),
    		'6' => array(
    		    array(FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE)
    		),
    		'7' => array(
    		    array(FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE)
    		),
    		'8' => array(
    		    array(FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE)
    		),
    		'9' => array(
    		    array(FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE)
    		)
        ));

        $this->min_scale = 1;
	    $this->max_scale = 3;
	    $this->min_square_size = 2;
	    $this->max_square_size = 4;
    }
}
?>