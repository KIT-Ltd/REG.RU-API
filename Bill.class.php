<?php
/* 
 * Класс для работы cо счетами
 * 
 * @author     Anton Popov <an.popov@list.ru>
 * @author     Maxim Isaev <sparker.max@gmail.com>
 * @copyright  Copyright (c) 2015 Kopeisk Information Technologies
 */

namespace RegRu;

/**
 * Класс для работы cо счетами
 */
class Bill extends Api
{
    /**
     * Тестовый метод, доступен клиентам
     */
    public function nop()
    {}
    
    /**
     * Метод для просмотра всех неоплаченных счетов, доступен клиентам
     */
    public function getNotPayed()
    {}
    
    /**
     * Метод для просмотра счетов за указанный период, доступен партнерам
     */
    public function getForPeriod()
    {}
    
    /**
     * Метод для смены способа оплаты, доступен клиентам
     */
    public function changePayType()
    {}
    
    /**
     * Метод для удаления неоплаченных счетов, доступен клиентам
     */
    public function delete()
    {}
}