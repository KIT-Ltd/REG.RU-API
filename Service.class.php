<?php
/* 
 * Класс для работы с услугами
 * 
 * @author     Anton Popov <an.popov@list.ru>
 * @author     Maxim Isaev <sparker.max@gmail.com>
 * @copyright  Copyright (c) 2015 Kopeisk Information Technologies
 */

namespace RegRu;

/**
 * Класс для работы с услугами
 */
class Service extends Api
{
    /**
     * Тестовый метод, доступен клиентам
     */
    public function nop()
    {}
    
    /**
     * Метод для получения цен на активацию/продление услуг, доступен всем
     */
    public function getPrices()
    {}
    
    /**
     * Метод для получения цен для услуги, доступен всем
     */
    public function getServtypeDetails()
    {}
    
    /**
     * Метод для заказа услуги, доступен всем
     */
    public function create()
    {}
    
    /**
     * Метод для удаления услуги, доступен клиентам
     */
    public function delete()
    {}
    
    /**
     * Метод для получения информации об услугах, доступен клиентам
     */
    public function getInfo()
    {}
    
    /**
     * Метод для получения списка активных услуг, доступен клиентам
     */
    public function getList()
    {}
    
    /**
     * Метод для получения списка папок в которые входит сервис, доступен клиентам
     */
    public function getFolders()
    {}
    
    /**
     * Метод для получения параметров услуги, доступен клиентам
     */
    public function getDetails()
    {}
    
    /**
     * Метод для получения списка выделенных серверов доступных для заказа, доступен клиентам
     */
    public function getDedicatedServerList()
    {}
    
    /**
     * Метод для настройки услуги, доступен клиентам
     */
    public function update()
    {}
    
    /**
     * Метод для продления услуги, доступен клиентам
     */
    public function renew()
    {}
    
    /**
     * Метод для получения списка счетов, связанных с указанными услугами, доступен партнерам
     */
    public function getBills()
    {}
    
    /**
     * Метод для установки/снятия флага автопродления, доступен клиентам
     */
    public function setAutorenewFlag()
    {}
    
    /**
     * Метод для приостановления услуги (снятие делегирования), доступен клиентам
     */
    public function suspend()
    {}
    
    /**
     * Метод для возобновления услуги (установка делегирования), доступен клиентам
     */
    public function resume()
    {}
    
    /**
     * Метод для расчета дробного числа периодов до истечения срока действия услуги, доступен клиентам
     */
    public function getDepreciatedPeriod()
    {}
    
    /**
     * Метод для повышения подтипа (тарифа) услуги, доступен клиентам
     */
    public function upgrade()
    {}
    
    /**
     * Метод для предоставления права частичного управления услугой другому пользователю, доступен клиентам
     */
    public function partcontrolGrant()
    {}
    
    /**
     * Метод для отключения права частичного управления услугой, доступен клиентам
     */
    public function partcontrolRevoke()
    {}
    
    /**
     * Метод для повторения email сообщения, доступен клиентам
     */
    public function resendMail()
    {}
    
    /**
     * Метод для пополнения счета услуги, доступен клиентам
     */
    public function refill()
    {}
    
    /**
     * Метод для вывода средств со счета внешней услуги, доступен партнерам
     */
    public function refund()
    {}
    
    /**
     * Метод для получения баланса внешней услуги, доступен клиентам
     */
    public function getBalance()
    {}
    
    /**
     * Метод для получения ссылки на панель управления Seowizard'ом, доступен партнерам
     */
    public function seowizardManageLink()
    {}
}
