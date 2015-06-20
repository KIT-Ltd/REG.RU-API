<?php
/* 
 * Класс для работы с папками
 * 
 * @author    Anton Popov <an.popov@list.ru>
 * @copyright Copyright (c) 2015-2016 KIT Ltd.
 */

namespace RegRu;

/**
 * Класс для работы с папками
 */
class Folder extends Api
{
    /**
     * Тестовый метод, доступен всем
     */
    public function nop()
    {}
    
    /**
     * Метод для создания папки, доступен всем
     */
    public function create()
    {}
    
    /**
     * Метод для удаления папки, доступен всем
     */
    public function remove()
    {}
    
    /**
     * Метод для переименования папки, доступен всем
     */
    public function rename()
    {}
    
    /**
     * Метод для получения списка услуг в папке, доступен всем
     */
    public function getServices()
    {}
    
    /**
     * Метод для добавления услуг в папку, доступен всем
     */
    public  function addServices()
    {}
    
    /**
     * Метод для удаления услуг из папки, доступен всем
     */
    public function removeServices()
    {}
    
    /**
     * Метод для перезаписывания услуг в папке, доступен всем
     */
    public function replaceServices()
    {}
    
    /**
     * Метод для переноса услуг из одной папки в другую, доступен всем
     */
    public function moveServices()
    {}
}
