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
 * 
 * @link https://www.reg.ru/support/help/api2#bill_functions
 */
class Bill extends Api
{
    /**
     * Тестовый метод, доступен клиентам
     * 
     * @link https://www.reg.ru/support/help/api2#bill_nop
     */
    public function nop($billId = null, array $bills = array())
    {
        return $this->send(get_defined_vars());
    }
    
    /**
     * Метод для просмотра всех неоплаченных счетов, доступен клиентам
     * 
     * @link https://www.reg.ru/support/help/api2#bill_get_not_payed
     */
    public function getNotPayed($limit = null, $offset = null)
    {
        return $this->send(get_defined_vars());
    }
    
    /**
     * Метод для просмотра счетов за указанный период, доступен партнерам
     * 
     * @link https://www.reg.ru/support/help/api2#bill_get_for_period
     */
    public function getForPeriod($startDate, $endDate, $payType = null, $limit = null, $offset = null, $all = null)
    {
        return $this->send(get_defined_vars());
    }
    
    /**
     * Метод для смены способа оплаты, доступен клиентам
     * 
     * @link https://www.reg.ru/support/help/api2#bill_change_pay_type
     */
    public function changePayType($billId = null, array $bills = array(), $payType, $currency = 'RUR', $wmid = null)
    {
        return $this->send(get_defined_vars());
    }
    
    /**
     * Метод для удаления неоплаченных счетов, доступен клиентам
     * 
     * @link https://www.reg.ru/support/help/api2#bill_delete
     */
    public function delete($billId = null, array $bills = array())
    {
        return $this->send(get_defined_vars());
    }
}