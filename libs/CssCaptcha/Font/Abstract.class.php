<?php
require_once 'libs/System/Random.class.php';

/**
 * Абстрактный шрифт.
 *
 */
abstract class CssCaptcha_Font_Abstract extends ArrayObject
{
    /**
     * Минимальный масштаб.
     *
     * @var integer
     */
	protected $min_scale;
	/**
	 * Максимальный масштаб.
	 *
	 * @var integer
	 */
	protected $max_scale;
	/**
	 * Минимальный размер квадрата.
	 *
	 * @var integer
	 */
	protected $min_square_size;
	/**
	 * Максимальный размер квадрата.
	 *
	 * @var integer
	 */
	protected $max_square_size;

	/**
	 * Конструктор.
	 * Устанавливает данные шрифта.
	 * 
	 * @param array $array
	 */
	public function __construct(array $array)
	{
		parent::__construct($array);
		
        $this->min_scale = 1;
	    $this->max_scale = 1;
	    $this->min_square_size = 1;
	    $this->max_square_size = 1;
	}
	
    /**
     * Возвращает минимальный масштаб.
     *
     * @return integer
     */
    public function getMinScale()
    {
        return $this->min_scale;
    }

    /**
     * Возвращает максимальный масштаб.
     *
     * @return integer
     */
	public function getMaxScale()
    {
        return $this->max_scale;
    }

    /**
     * Возвращает минимальный размер квадрата.
     *
     * @return integer
     */
	public function getMinSquareSize()
    {
        return $this->min_square_size;
    }
    
    /**
     * Возвращает максимальный размер квадрата.
     *
     * @return integer
     */
	public function getMaxSquareSize()
    {
        return $this->max_square_size;
    }

    /**
     * Возвращает итератор, установленный на случайный символ.
     *
     * @return ArrayIterator
     */
	public function getIteratorToRandomSymbol()
    {
    	$random_index = System_Random::getInstance()->getDigit(0, $this->count() - 1);

    	$iterator = $this->getIterator();
    	$iterator->rewind();
    	for ($i = 0; $i < $random_index; $i++)
    	    $iterator->next();

    	return $iterator;
    }
}
?>