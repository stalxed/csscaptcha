<?php

/**
 * Класс php native шаблонизатора.
 * За основу взят класс limb framework.
 *
 */
class View_Php
{
    /**
     * Путь директории с шаблонами.
     *
     * @var string
     */
    private $path_directory;
    /**
     * Переменные шаблона.
     *
     * @var array
     */
    private $variables = array();

    /**
     * Конструктор, устанавливает путь директории с шаблонами.
     *
     * @param string $path_directory
     */
    function __construct($path_directory)
    {
        $this->path_directory = $path_directory;
    }

    /**
     * Устанавливает путь директории с шаблонами.
     * 
     * @param string $path_directory
     */
    public function setPathDirectory($path_directory)
    {
        $this->path_directory = $path_directory;
    }

	/**
     * Устанавливает переменную шаблона.
     *
     * @param string $name
     * @param mixed $value
     */
    function set($name, $value)
    {
        $this->variables[$name] = $value;
    }

    /**
     * Очищает переменные шаблона.
     *
     */
    public function clear()
    {
        $this->variables = array();
    }

    /**
     * Возвращает откомпилированный шаблон.
     *
     * @return string
     */
    function out($template)
    {
        extract($this->variables);

        ob_start();
        include($this->path_directory . DIRECTORY_SEPARATOR . $template . '.php');
        $res = ob_get_contents();
        ob_end_clean();

        return $res;
    }
}
?>