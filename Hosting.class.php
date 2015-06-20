<?php
/* 
 * Класс для работы с хостингом
 * 
 * @author    Anton Popov <an.popov@list.ru>
 * @copyright Copyright (c) 2015-2016 KIT Ltd.
 */

namespace RegRu;

/**
 * Класс для работы с хостингом
 */
class Hosting extends Api
{
    /**
     * Метод для проверки работоспособности API, доступен клиентам
     */
    public function nop()
    {}
    
    /**
     * Метод для получения URL'а Jelastic'а, доступен партнерам
     */
    public function getJelasticRefillUrl()
    {}
    
    /**
     * Метод для установки URL'а Jelastic'а, доступен партнерам
     */
    public function setJelasticRefillUrl()
    {}
    
    /**
     * Метод для получения URL'а конструктора ParallelsWPB, доступен клиентам
     */
    public function getParallelswpbConstructorUrl()
    {}
    
    /**
     * Метод для получения списка доступных тем, доступен всем
     */
    public function getRsThemes()
    {}
}
