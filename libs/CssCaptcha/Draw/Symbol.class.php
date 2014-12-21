<?php
require_once 'libs/System/Random.class.php';

/**
 * Класс генерации символа.
 *
 */
class CssCaptcha_Draw_Symbol
{
    /**
     * Код символа.
     * 
     * @var array
     */
	private $code_symbol;	
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
	 * Цвет шрифта.
	 * 
	 * @var string
	 */
	private $font_color;
	/**
	 * Название css класса символа.
	 * 
	 * @var string
	 */
	private $name_css_class_symbol;
	/**
	 * Название css класса строчки.
	 * 
	 * @var string
	 */
	private $name_css_class_line;
	/**
	 * Название css класса закрашенного квадрата.
	 * 
	 * @var string
	 */
	private $name_css_class_square_shaded;
	/**
	 * Название css класса пустого квадрата.
	 * 
	 * @var string
	 */
	private $name_css_class_square_empty;

	/**
	 * Конструктор.
	 * Устанавливает код символа, контейнер html кода, контейнер css кода и
	 * контейнер css кода для Internet Explorer 7.
	 * 
	 * @param array $code_symbol
	 * @param CssCaptcha_Container $container_html
	 * @param CssCaptcha_Container $container_css
	 * @param CssCaptcha_Container $container_css_compatible_ie7
	 */
    public function __construct(array $code_symbol, CssCaptcha_Container $container_html, CssCaptcha_Container $container_css, CssCaptcha_Container $container_css_compatible_ie7)
    {
    	$this->code_symbol = $code_symbol;
    	
    	$this->container_html = $container_html;
    	$this->container_css = $container_css;
    	$this->container_css_compatible_ie7 = $container_css_compatible_ie7;
    	
    	$this->scale = 1;
    	$this->square_size = 1;
    	
    	$this->font_color = 'black';
    	$this->background_color = 'white';
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
     * Устанавливает цвет шрифта.
     * 
     * @param string $font_color
     */
	public function setFontColor($font_color)
    {
        $this->font_color = $font_color;
    }

    /**
     * Генерирует символ.
     * 
     */
	public function generate()
    {
    	$this->generateNamesCssClasses();
    	$this->generateHtml();
    	$this->generateCss();
    	$this->generateCssCompatibleIe7();
    }
    
    /**
     * Генерирует названия css классов.
     * 
     */
	private function generateNamesCssClasses()
    {
    	$this->name_css_class_symbol = 'csscaptcha_' . System_Random::getInstance()->getUniqueWord(3, 10);
    	$this->name_css_class_line = 'csscaptcha_' . System_Random::getInstance()->getUniqueWord(3, 10);
    	$this->name_css_class_square_shaded = 'csscaptcha_' . System_Random::getInstance()->getUniqueWord(3, 10);
    	$this->name_css_class_square_empty = 'csscaptcha_' . System_Random::getInstance()->getUniqueWord(3, 10);
    }

    /**
     * Генерирует html код.
     * 
     */
	private function generateHtml()
    {
        $this->generateHtmlSymbol();
    }
    
    /**
     * Генерирует html код символа.
     * 
     */
	private function generateHtmlSymbol()
    {
        $this->container_html->append('<div class="' . $this->name_css_class_symbol  . '">');
    	
    	foreach ($this->code_symbol as $line)
    	{
    		for ($i = 1; $i <= $this->scale; $i++)
    		{
    		    $this->generateHtmlLine($line);
    		}
    	}
    	
    	$this->container_html->append('</div>');
    }

    /**
     * Генерирует html код строчки.
     * 
     * @param array $line
     */
    private function generateHtmlLine(array $line)
    {
    	$this->container_html->append('<div class="' . $this->name_css_class_line . '">');
    	
    	foreach ($line as $square)
    	{
    		for ($i = 1; $i <= $this->scale; $i++)
    		{
    		    $this->generateHtmlSquare($square);
    		}
    	}
    	
    	$this->container_html->append('</div>');
    }
    
    /**
     * Генерирует html код квадрата.
     * 
     * @param boolean $square
     */
    private function generateHtmlSquare($square)
    {
    	if ($square)
    	    $this->container_html->append('<div class="' . $this->name_css_class_square_shaded . '"></div>');
    	else
    	    $this->container_html->append('<div class="' . $this->name_css_class_square_empty . '"></div>');
    }
    
    /**
     * Генерирует css код.
     * 
     */
	private function generateCss()
    {
        $this->generateCssSymbol();
    	$this->generateCssLine();
    	$this->generateCssSquareShaded();	
    	$this->generateCssSquareEmpty();
    }
    
    /**
     * Генерирует css код символа.
     * 
     */
    private function generateCssSymbol()
    {
    	$this->container_css->append('.' . $this->name_css_class_symbol . ' { ' .
    	    'display: inline-block; ' .
    	    'font-size: 0; ' . 
    	    'line-height: 0; ' .
    	    'padding: 0 3px;' . 
            ' }'
    	);
    }
    
    /**
     * Генерирует css код строчки.
     * 
     */
    private function generateCssLine()
    {
    	$this->container_css->append('.' . $this->name_css_class_line . ' DIV { ' . 
    	    'display: inline-block; ' .
    	    'width: ' . $this->square_size . 'px; ' . 
    	    'height: ' . $this->square_size . 'px; ' . 
    	    'overflow: hidden;' .
            ' }'
    	);
    }
    
    /**
     * Генерирует css код закрашенного квадрата.
     * 
     */
    private function generateCssSquareShaded()
    {
    	$this->container_css->append('.' . $this->name_css_class_square_shaded . ' { ' . 
    	    'background: ' . $this->font_color . ';' .
            ' }'
    	);
    }
    
	/**
     * Генерирует css код пустого квадрата.
     * 
     */
    private function generateCssSquareEmpty()
    {
    	$this->container_css->append('.' . $this->name_css_class_square_empty . ' { }');
    }

    /**
     * Генерирует css код для Internet Explorer 7.
     * 
     */
	private function generateCssCompatibleIe7()
    {
        $this->generateCssCompatibleIe7Symbol();
    	$this->generateCssCompatibleIe7Line();
    	$this->generateCssCompatibleIe7SquareShaded();
    	$this->generateCssCompatibleIe7SquareEmpty();
    }
    
    /**
     * Генерирует css код символа для Internet Explorer 7.
     * 
     */
    private function generateCssCompatibleIe7Symbol()
    {
    	$this->container_css_compatible_ie7->append('.' . $this->name_css_class_symbol . ' { ' . 
    	    'display: inline; ' . 
    	    'zoom: 1;' .
            ' }'
    	);
    }
    
    /**
     * Генерирует css код строчки для Internet Explorer 7.
     * 
     */
    private function generateCssCompatibleIe7Line()
    {
    	$this->container_css_compatible_ie7->append('.' . $this->name_css_class_line . ' DIV { ' . 
    	    'display: inline; ' .
    	    'zoom: 1;' .
            ' }'
    	);
    }
    
    /**
     * Генерирует css код закрашенного квадрата для Internet Explorer 7.
     * 
     */
    private function generateCssCompatibleIe7SquareShaded()
    {
    	$this->container_css_compatible_ie7->append('.' . $this->name_css_class_square_shaded . ' { }');
    }
	
    /**
     * Генерирует css код пустого квадрата для Internet Explorer 7.
     * 
     */
    private function generateCssCompatibleIe7SquareEmpty()
    {
    	$this->container_css_compatible_ie7->append('.' . $this->name_css_class_square_empty . ' { }');
    }
}
?>