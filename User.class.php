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
 * 
 * @link https://www.reg.ru/support/help/api2#user_functions
 */
class User extends Api
{
    /**
     * Метод для регистрации нового пользователя, доступен партнерам
     * 
     * @link https://www.reg.ru/support/help/api2#user_create
     */
    public function create(
        // Обязательные поля
        $userLogin,
        $userPassword,
        $userEmail,
        $userCountryCode = 'RU',
        // Необязательные поля — другие параметры
        $userSubsribe = 0,
        $userMailnotify = 1,
        $setMeAsReferrer = 0,
        $checkOnly = 0,
        $whiteListIps = array(),
        // Необязательные поля — анкета пользователя
        $userFirstName = null,
        $userLastName = null,
        $userCompany = null,
        $userJabberId = null,
        $userIcq = null,
        $userPhone = null,
        $userFax = null,
        $userAddr = null,
        $userCity = null,
        $userState = null,
        $userPostcode = null,
        $userWmid = null,
        $userWebsite = null
    ) {
        return $this->send(get_defined_vars());
    }
    
    /**
     * Метод для получения статистики по пользователю, доступен клиентам
     * 
     * @link https://www.reg.ru/support/help/api2#user_get_statistics
     */
    public function getStatistics($dateFrom = null, $dateTill = null)
    {
        return $this->send(get_defined_vars());
    }
    
    /**
     * Метод для просмотра баланса, доступен клиентам
     * 
     * @link https://www.reg.ru/support/help/api2#user_get_balance
     */
    public function getBalance($currency = 'RUR')
    {
        return $this->send(get_defined_vars());
    }
    
    /**
     * Метод для пополнения баланса, доступен клиентам
     * 
     * @link https://www.reg.ru/support/help/api2#user_refill_balance
     */
    public function refillBalance($payType, $wmid = null, $currency, $amount)
    {
        return $this->send(get_defined_vars());
    }
    
    /**
     * Метод установки URL для редиректа из внешней услуги, доступен партнерам
     * 
     * @link https://www.reg.ru/support/help/api2#user_set_reseller_url
     */
    public function setResellerUrl($servtype, $urlType, $url)
    {
        return $this->send(get_defined_vars());
    }
    
    /**
     * Метод получения URL для редиректа из внешней услуги, доступен партнерам
     */
    public function getResellerUrl($servtype, $urlType)
    {
        return $this->send(get_defined_vars());
    }
}
