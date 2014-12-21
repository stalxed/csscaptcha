<?php
require_once 'libs/CssCaptcha/Draw/Word.class.php';
require_once 'libs/CssCaptcha/Font/Factory.class.php';
require_once 'libs/CssCaptcha/Colors.class.php';
require_once 'libs/CssCaptcha/Container.class.php';
require_once 'libs/System/Random.class.php';

/**
 * Css каптча.
 *
 */
class CssCaptcha_Facade
{
	/**
	 * Минимальное количество символов.
	 * 
	 * @var integer
	 */
	private $min_count_symbols;
	/**
	 * Максимальное количество символов.
	 * 
	 * @var integer
	 */
	private $max_count_symbols;
    /**
     * Контейнер слова.
     * 
     * @var CssCaptcha_Container
     */
	private $container_word;
	/**
	 * Контейнер html кода.
	 * 
	 * @var CssCaptcha_Container
	 */
	private $container_html;
	/**
	 * Контейнер css кода.
	 * 
	 * @var CssCaptcha_Container
	 */
	private $container_css;
	/**
	 * Контейнер css кода для Internet Explorer 7.
	 * 
	 * @var CssCaptcha_Container
	 */
	private $container_css_compatible_ie7;
	
	/**
	 * Конструктор.
	 * Устанавливает количество символов и контейнеры.
	 * 
	 */
	public function __construct()
	{
		$this->min_count_symbols = 5;
		$this->max_count_symbols = 5;
		
		$this->setContainers();
	}

	/**
	 * Устанавливает минимальное количество символов.
	 * 
	 * @param integer $min_count_symbols
	 */
    public function setMinCountSymbols($min_count_symbols)
    {
        $this->min_count_symbols = $min_count_symbols;
    }
    
    /**
     * Устанавливает максимальное количество символов.
     * 
     * @param integer $max_count_symbols
     */
	public function setMaxCountSymbols($max_count_symbols)
    {
        $this->max_count_symbols = $max_count_symbols;
    }

    /**
     * Генерирует css каптчу.
     * 
     */
	public function generate()
    {
    	$this->setContainers();
    	
    	$font = $this->getFont();
    	$code_symbols = $this->getCodeSymbols($font);
    	$scale = $this->getScale($font);
    	$square_size = $this->getSquareSize($font);
    	$colors = $this->getColors();
    		
		$this->drawWord($code_symbols, $scale, $square_size, $colors->getBackgroundColor(), $colors->getFontColor());

		$this->handleContainers();
    }
    /**
     * Возвращает слово.
     * 
     * @return string
     */
	public function getWord()
    {
    	return $this->container_word->__toString();
    }
    
    /**
     * Возвращает html код.
     * 
     * @return string
     */
    public function getHtml()
    {
    	return $this->container_html->__toString();
    }
    
    /**
     * Возвращает css код.
     * 
     * @return string
     */    
    public function getCss()
    {
    	return $this->container_css->__toString();
    }
    
    /**
     * Возвращает css код для Internet Explorer 7.
     * 
     * @return string
     */    
	public function getCssCompatibleIe7()
    {
        return $this->container_css_compatible_ie7->__toString();
    }
    
    /**
     * Устанавливает контейнеры.
     *
     */
	private function setContainers()
    {
    	$this->container_word = new CssCaptcha_Container();
        $this->container_html = new CssCaptcha_Container();
		$this->container_css = new CssCaptcha_Container();
		$this->container_css_compatible_ie7 = new CssCaptcha_Container();
    }
    
    /**
     * Возвращает шрифт.
     * 
     * @return CssCaptcha_Font_Abstract
     */
	private function getFont()
    {
        $font_factory = new CssCaptcha_Font_Factory();
        
		return $font_factory->createRandom();
    }
    
    /**
     * Возвращает список кодов символов.
     * 
     * @param CssCaptcha_Font_Abstract $font
     * @return ArrayObject
     */
    private function getCodeSymbols(CssCaptcha_Font_Abstract $font)
    {
    	$count_symbols = System_Random::getInstance()->getDigit($this->min_count_symbols, $this->max_count_symbols);    
    	    
    	$word = new ArrayObject(array());
    	for ($i = 1; $i <= $count_symbols; $i++)
    	{
    		$symbol = $font->getIteratorToRandomSymbol();
    		
    		$this->container_word->append($symbol->key());
    		$word->append($symbol->current());	
    	}
    	
    	return $word;
    }
    
    /**
     * Возвращает масштаб.
     * 
     * @param CssCaptcha_Font_Abstract $font
     * @return integer
     */	    
    private function getScale(CssCaptcha_Font_Abstract $font)
    {
    	return System_Random::getInstance()->getDigit($font->getMinScale(), $font->getMaxScale());
    }
    
    /**
     * Возвращает размер квадрата.
     * 
     * @param CssCaptcha_Font_Abstract $font
     * @return integer
     */
    private function getSquareSize(CssCaptcha_Font_Abstract $font)
    {
    	return System_Random::getInstance()->getDigit($font->getMinSquareSize(), $font->getMaxSquareSize());
    }
    
    /**
     * Возвращает список цветов.
     * 
     * @return CssCaptcha_Colors
     */
	private function getColors()
    {
        $colors = new CssCaptcha_Colors();
		$colors->generate();
		
		return $colors;
    }

    /**
     * Генерирует слово.
     * 
     * @param ArrayObject $code_symbols
     * @param integer $scale
     * @param integer $square_size
     * @param string $background_color
     * @param string $font_color
     */
	private function drawWord(ArrayObject $code_symbols, $scale, $square_size, $background_color, $font_color)
    {
		$draw_word = new CssCaptcha_Draw_Word(
		    $code_symbols,
		    $this->container_html,
		    $this->container_css,
		    $this->container_css_compatible_ie7
		);
		$draw_word->setScale($scale);
		$draw_word->setSquareSize($square_size);
		$draw_word->setBackgroundColor($background_color);
		$draw_word->setFontColor($font_color);
		$draw_word->generate();
    }
    
    /**
     * Выполняет обработку контейнеров.
     * 
     */
	private function handleContainers()
    {
    	$this->container_word->setStringDelimiter('');
    	
    	$this->container_html->setStringDelimiter('');
    	
        $this->container_css->setStringDelimiter("\n");
		$this->container_css->shuffle();
		
		$this->container_css_compatible_ie7->setStringDelimiter("\n");
		$this->container_css_compatible_ie7->shuffle();
    }
}
?>