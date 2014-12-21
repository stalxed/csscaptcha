<?php
require_once 'libs/System/Random.class.php';

/**
 * Контейнер.
 *
 */
class CssCaptcha_Container extends ArrayObject
{	
	/**
	 * Разделитель элементов в строке.
	 * 
	 * @var string
	 */
	private $string_delimiter;

	/**
	 * Конструктор.
	 * Устанавливает начальное значение контейнера.
	 * 
	 * @param array $data
	 */
    public function __construct(array $data = array())
    {
        parent::__construct($data); 

        $this->string_delimiter = '';
    }
    
    /**
     * Устанавливает разделитель элементов в строке.
     * 
     * @param string $string_delimiter
     */
    public function setStringDelimiter($string_delimiter)
    {
    	$this->string_delimiter = $string_delimiter;
    }
    
    /**
     * Складывает элементы контейнера в строку и возвращает её.
     * 
     * @return string
     */
    public function __toString()
    {
    	$string = '';
    	
    	$is_first = TRUE;
    	foreach ($this as $element)
    	{
    		if ($is_first)    
    		    $is_first = FALSE;
    		else
    		    $string .= $this->string_delimiter;
    		
    		$string .= (string)$element;
    	}
    	
    	return $string;
    }
    
    /**
     * Перемещает элементы контейнера в случайном порядке.
     * 
     */
    public function shuffle()
    {
    	$array = $this->getArrayCopy();   
    	$array = System_Random::getInstance()->shuffle($array);   
    	$this->exchangeArray($array);    
    }
}
?>