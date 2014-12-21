<?php
require_once 'libs/CssCaptcha/Font/Abstract.class.php';

/**
 * Шрифт RussianLetters.
 *
 */
class CssCaptcha_Font_RussianLetters extends CssCaptcha_Font_Abstract
{
	/**
	 * (non-PHPdoc)
	 *
	 * @see CssCaptcha_Font_Abstract::__construct()
	 */
    public function __construct()
    {
        parent::__construct(array(
    		'а' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE, FALSE, FALSE),
    		    array(FALSE, TRUE, FALSE, TRUE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE)
    		),
    		'б' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(FALSE, TRUE, FALSE, FALSE, FALSE, FALSE),
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(FALSE, TRUE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, FALSE)
    		),
    		'в' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, FALSE, FALSE)
    		),
    		'г' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, FALSE, FALSE)
    		),
    		'д' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(FALSE, TRUE, FALSE, FALSE, TRUE, FALSE, FALSE),
    		    array(FALSE, TRUE, FALSE, FALSE, TRUE, FALSE, FALSE),
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, FALSE, TRUE, FALSE)
    		),
    		'е' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, FALSE)
    		),
    		'ж' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE, TRUE, FALSE),
    		    array(FALSE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE, FALSE, FALSE),
    		    array(FALSE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE, TRUE, FALSE)
    		),
    		'з' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(FALSE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(FALSE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(FALSE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, FALSE, FALSE)
    		),
    		'и' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, TRUE, TRUE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE)
    		),
    		'й' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, TRUE, TRUE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE)
    		),
    		'к' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, TRUE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, TRUE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE)
    		),
    		'л' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(FALSE, TRUE, FALSE, FALSE, TRUE, FALSE),
    		    array(FALSE, TRUE, FALSE, FALSE, TRUE, FALSE),
    		    array(FALSE, TRUE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE)
    		),
    		'м' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, TRUE, TRUE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE)
    		),
    		'н' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE)
    		),
    		'о' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(FALSE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(FALSE, TRUE, TRUE, TRUE, FALSE, FALSE)
    		),
    		'п' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE)
    		),
    		'р' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, FALSE, FALSE)
    		),
    		'с' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, FALSE)
    		),
    		'т' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE, FALSE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE, FALSE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE, FALSE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE, FALSE, FALSE)
    		),
    		'у' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(FALSE, TRUE, FALSE, TRUE, FALSE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE, FALSE, FALSE),
    		    array(FALSE, TRUE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, FALSE, FALSE)
    		),
    		'ф' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE, FALSE, FALSE),
    		    array(FALSE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE, TRUE, FALSE),
    		    array(FALSE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE, FALSE, FALSE)
    		),
    		'х' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(FALSE, TRUE, FALSE, TRUE, FALSE, FALSE),
    		    array(FALSE, FALSE, TRUE, FALSE, FALSE, FALSE),
    		    array(FALSE, TRUE, FALSE, TRUE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE)
    		),
    		'ц' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(FALSE, FALSE, FALSE, FALSE, TRUE, FALSE)
    		),
    		'ч' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(FALSE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(FALSE, FALSE, FALSE, FALSE, TRUE, FALSE)
    		),
    		'ш' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE, TRUE, FALSE),
    		    array(FALSE, TRUE, TRUE, TRUE, FALSE, FALSE)
    		),
    		'щ' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE, TRUE, FALSE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE, TRUE, FALSE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE, TRUE, FALSE, FALSE),
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE)
    		),
    		'ъ' => array(
    		    array(FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE)
    		),
    		'ы' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE, TRUE, FALSE)
    		),
    		'ь' => array(
    		    array(FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, FALSE, FALSE)
    		),
    		'э' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, FALSE, FALSE),
    		    array(FALSE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(FALSE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, TRUE, FALSE, FALSE)
    		),
    		'ю' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(TRUE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, TRUE, TRUE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, TRUE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, TRUE, TRUE, FALSE, FALSE)
    		),
    		'я' => array(
    		    array(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE),
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE),
    		    array(FALSE, TRUE, TRUE, TRUE, TRUE, FALSE),
    		    array(FALSE, TRUE, FALSE, FALSE, TRUE, FALSE),
    		    array(TRUE, FALSE, FALSE, FALSE, TRUE, FALSE)
    		)
	    ));

        $this->min_scale = 1;
	    $this->max_scale = 3;
	    $this->min_square_size = 2;
	    $this->max_square_size = 4;
	}
}
?>