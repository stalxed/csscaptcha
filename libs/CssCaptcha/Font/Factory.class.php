<?php
require_once 'libs/System/Random.class.php';

/**
 * Фабрика шрифтов.
 *
 */
class CssCaptcha_Font_Factory
{
	/**
	 * Создаёт шрифт BigDigits.
	 * 
	 * @return CssCaptcha_Font_BigDigits
	 */
    public function createBigDigits()
    {
        require_once 'libs/CssCaptcha/Font/BigDigits.class.php';

        return new CssCaptcha_Font_BigDigits();
    }
    
	/**
	 * Создаёт шрифт BigLetters.
	 * 
	 * @return CssCaptcha_Font_BigLetters
	 */
    public function createBigLetters()
    {
        require_once 'libs/CssCaptcha/Font/BigLetters.class.php';

        return new CssCaptcha_Font_BigLetters();
    }
    
	/**
	 * Создаёт шрифт LowerLetters.
	 * 
	 * @return CssCaptcha_Font_LowerLetters
	 */
    public function createLowerLetters()
    {
        require_once 'libs/CssCaptcha/Font/LowerLetters.class.php';

        return new CssCaptcha_Font_LowerLetters();
    }
    
	/**
	 * Создаёт шрифт RussianDigits.
	 * 
	 * @return CssCaptcha_Font_RussianDigits
	 */
    public function createRussianDigits()
    {
        require_once 'libs/CssCaptcha/Font/RussianDigits.class.php';

        return new CssCaptcha_Font_RussianDigits();
    }
    
	/**
	 * Создаёт шрифт RussianLetters.
	 * 
	 * @return CssCaptcha_Font_RussianLetters
	 */
    public function createRussianLetters()
    {
        require_once 'libs/CssCaptcha/Font/RussianLetters.class.php';

        return new CssCaptcha_Font_RussianLetters();
    }
    
	/**
	 * Создаёт шрифт SimpleDigits.
	 * 
	 * @return CssCaptcha_Font_SimpleDigits
	 */
    public function createSimpleDigits()
    {
        require_once 'libs/CssCaptcha/Font/SimpleDigits.class.php';

        return new CssCaptcha_Font_SimpleDigits();
    }
    
	/**
	 * Создаёт шрифт SimpleLetters.
	 * 
	 * @return CssCaptcha_Font_SimpleLetters
	 */
    public function createSimpleLetters()
    {
        require_once 'libs/CssCaptcha/Font/SimpleLetters.class.php';

        return new CssCaptcha_Font_SimpleLetters();
    }
    
	/**
	 * Создаёт случайный шрифт.
	 * 
	 * @return CssCaptcha_Font_Abstract
	 */
    public function createRandom()
    {
    	$font = NULL;
    	switch (System_Random::getInstance()->getDigit(0, 6))
    	{
    		case 0:
    		    $font = $this->createBigDigits();
    		    break;
    		case 1:
    		    $font = $this->createBigLetters();
    		    break;
    		case 2:
    		    $font = $this->createLowerLetters();
    		    break;
    		case 3:
    		    $font = $this->createRussianDigits();
    		    break;
    		case 4:
    		    $font = $this->createRussianLetters();
    		    break;
    		case 5:
    		    $font = $this->createSimpleDigits();
    		    break;
    		case 6:
    		default:
    		    $font = $this->createSimpleLetters();
    		    break;
    	}

    	return $font;
    }
}
?>