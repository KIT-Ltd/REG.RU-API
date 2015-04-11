<?php
/* 
 * Класс для работы с учётной записью
 * 
 * @author     Anton Popov <an.popov@list.ru>
 * @author     Maxim Isaev <sparker.max@gmail.com>
 * @copyright  Copyright (c) 2015 Kopeisk Information Technologies
 */

namespace RegRu;

/**
 * Класс для работы с учётной записью
 */
class User extends Api
{
    /**
     * Тестовый метод, доступный для всех
     */
    public function nop()
    {}
    
    /**
     * Метод для регистрации нового пользователя, доступен партнерам
     */
    public function create()
    {}
    
    /**
     * Метод для получения статистики по пользователю, доступен клиентам
     */
    public function getStatistics()
    {}
    
    /**
     * Метод для просмотра баланса, доступен клиентам
     */
    public function getBalance()
    {}
    
    /**
     * Метод для пополнения баланса, доступен клиентам
     */
    public function refillBalance()
    {}
    
    /**
     * Метод установки URL для редиректа из внешней услуги, доступен партнерам
     */
    public function setResellerUrl()
    {}
    
    /**
     * Метод получения URL для редиректа из внешней услуги, доступен партнерам
     */
    public function getResellerUrl()
    {}
}
