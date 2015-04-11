<?php
/* 
 * Класс для работы с магазином доменов
 * 
 * @author     Anton Popov <an.popov@list.ru>
 * @author     Maxim Isaev <sparker.max@gmail.com>
 * @copyright  Copyright (c) 2015 Kopeisk Information Technologies
 */

/**
 * Класс для работы с магазином доменов
 */
class Shop
{
    /**
     * Тестовый метод, доступен клиентам
     */
    public function nop()
    {}
    
    /**
     * Метод для добавления лота/лотов, доступен всем
     */
    public function addLot()
    {}
    
    /**
     * Метод для обновления лота, доступен всем
     */
    public function updateLot()
    {}
    
    /**
     * Метод для удаления лота, доступен всем
     */
    public function deleteLot()
    {}
    
    /**
     * Метод для получения информации о лоте, доступен всем
     */
    public function getInfo()
    {}
    
    /**
     * Метод для получения списка лотов, доступен всем
     */
    public function getLotList()
    {}
    
    /**
     * Метод для получения списка категорий лотов, доступен всем
     */
    public function getCategoryList()
    {}
    
    /**
     * Метод для получения списка ключевых слов лотов, доступен всем
     */
    public function getSuggestedTags()
    {}
}
