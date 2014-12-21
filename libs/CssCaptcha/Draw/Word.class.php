<?php
require_once 'libs/CssCaptcha/Draw/Symbol.class.php';
require_once 'libs/System/Random.class.php';

/**
 * Класс генерации слова.
 *
 */
class CssCaptcha_Draw_Word
{
    /**
     * Коды символов.
     * 
     * @var ArrayObject
     */
	private $code_symbols;
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
     * Масштаб.
     * 
     * @var integer
     */
	private $scale;
	/**
	 * Размер квадрата.
	 * 
	 * @var integer
	 */
	private $square_size;
	/**
	 * Цвет фона.
	 * 
	 * @var string
	 */
	private $background_color;
	/**
	 * Цвет шрифта.
	 * 
	 * @var string
	 */
	private $font_color;
	/**
	 * Название css класса слова.
	 * 
	 * @var string
	 */
	private $name_css_class_word;

	/**
	 * Конструктор.
	 * Устанавливает коды символов, контейнер html кода, контейнер css кода и
	 * контейнер css кода для Internet Explorer 7.
	 * 
	 * @param ArrayObject $code_symbol
	 * @param CssCaptcha_Container $container_html
	 * @param CssCaptcha_Container $container_css
	 * @param CssCaptcha_Container $container_css_compatible_ie7
	 */
    public function __construct(ArrayObject $code_symbols, CssCaptcha_Container $container_html, CssCaptcha_Container $container_css, CssCaptcha_Container $container_css_compatible_ie7)
    {
    	$this->code_symbols = $code_symbols;
    	
    	$this->container_html = $container_html;
    	$this->container_css = $container_css;
    	$this->container_css_compatible_ie7 = $container_css_compatible_ie7;
    	
    	$this->scale = 1;
    	$this->square_size = 1;
    	
    	$this->background_color = 'white';
    	$this->font_color = 'black';
    }
    
    /**
     * Устанавливает масштаб.
     * 
     * @param integer $scale
     */
    public function setScale($scale)
    {
        $this->scale = $scale;
    }
    
    /**
     * Устанавливает размер квадрата.
     * 
     * @param integer $square_size
     */
	public function setSquareSize($square_size)
    {
        $this->square_size = $square_size;
    }

    /**
     * Устанавливает цвет фона.
     * 
     * @param string $background_color
     */
	public function setBackgroundColor($background_color)
    {
        $this->background_color = $background_color;
    }

    /**
     * Устанавливает цвет шрифта.
     * 
     * @param string $font_color
     */
	public function setFontColor($font_color)
    {
        $this->font_color = $font_color;
    }
    
    /**
     * Генерирует слово.
     * 
     */
	public function generate()
    {
    	$this->generateNamesCssClasses();
    	$this->generateHtmlStart();
		foreach ($this->code_symbols as $code_symbol)
		{
		    $this->generateSymbol($code_symbol);
		}
		$this->generateHtmlEnd();
    	$this->generateCss();	
    	$this->generateCssCompatibleIe7();
    }

    /**
     * Генерирует названия css классов.
     * 
     */
	private function generateNamesCssClasses()
    {
    	$this->name_css_class_word = 'csscaptcha_' . System_Random::getInstance()->getUniqueWord(3, 10);
    }
    
    /**
     * Генерирует html код в начале.
     * 
     */
	private function generateHtmlStart()
    {
        $this->container_html->append('<div class="' . $this->name_css_class_word . '">');
    }
        
    /**
     * Генерирует символ.
     * 
     * @param array $code_symbol
     */
	private function generateSymbol(array $code_symbol)
    {
        $draw_symbol = new CssCaptcha_Draw_Symbol($code_symbol, $this->container_html, $this->container_css, $this->container_css_compatible_ie7);
        $draw_symbol->setScale($this->scale);
        $draw_symbol->setSquareSize($this->square_size);
        $draw_symbol->setFontColor($this->font_color);
        $draw_symbol->generate();
    }
    
    /**
     * Генерирует html код в конце.
     * 
     */
    private function generateHtmlEnd()
    {
        $this->container_html->append('</div>');
    }
    
    /**
     * Генерирует css код.
     * 
     */
	private function generateCss()
    {
        $this->container_css->append('.' . $this->name_css_class_word . ' { display: inline-block; font-size: 0; line-height: 0; background: ' . $this->background_color . '; }');
    }
    
    /**
     * Генерирует css код для Internet Explorer 7.
     * 
     */
    private function generateCssCompatibleIe7()
    {
    	$this->container_css_compatible_ie7->append('.' . $this->name_css_class_word . ' { display: inline; zoom: 1; }');
    }
}
?>