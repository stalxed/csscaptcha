<?php
require_once 'libs/System/Random.class.php';

/**
 * Список цветов.
 *
 */
class CssCaptcha_Colors
{
	/**
	 * Список цветов.
	 * 
	 * @var array
	 */
    private $colors = array();
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
     * Конструктор.
     * Устанавливает список цветов.
     * 
     */
    public function __construct()
    {
    	$this->colors = array(
            array('#ffd900', '#ccff00'),
            array('#a700ff', '#ff0059'),
            array('#00f9ff', '#000fff'),
            array('#2fff00', '#0098ff'),
            array('#7b917b', '#33cc33'),
            array('#464451', '#00ff00'),
            array('#3300ff', '#ff00ff'),
            array('#2a52be', '#efd334'),
            array('#6b8e23', '#fc0fc0'),
            array('#0ffc40', '#8e0ffc'),
            array('#ccff00', '#ffd900'),
            array('#ff0059', '#a700ff'),
            array('#000fff', '#00f9ff'),
            array('#0098ff', '#2fff00'),
            array('#33cc33', '#7b917b'),
            array('#00ff00', '#464451'),
            array('#ff00ff', '#3300ff'),
            array('#efd334', '#2a52be'),
            array('#fc0fc0', '#6b8e23'),
            array('#8e0ffc', '#0ffc40')
        );
    }
    
    /**
     * Генерирует цвет фона и шрифта.
     * 
     */
    public function generate()
    {
    	$color_index = System_Random::getInstance()->getDigit(0, count($this->colors) - 1);
        $this->background_color = $this->colors[$color_index][0];
    	$this->font_color = $this->colors[$color_index][1];
    }  
    
    /**
     * Возвращает  цвет фона.
     * 
     * @return string
     */
    public function getBackgroundColor()
    {
    	return $this->background_color;
    }
    
    /**
     * Возвращает цвет шрифта.
     * 
     * @return string
     */
    public function getFontColor()
    {
    	return $this->font_color;
    }
}
?>