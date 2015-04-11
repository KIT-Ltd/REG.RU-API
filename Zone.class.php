<?php
/* 
 * Класс для управления DNS-зонами
 * 
 * @author     Anton Popov <an.popov@list.ru>
 * @author     Maxim Isaev <sparker.max@gmail.com>
 * @copyright  Copyright (c) 2015 Kopeisk Information Technologies
 */

/**
 * Класс для управления DNS-зонами
 */
class Zone
{
    /**
     * Тестовый метод, доступен клиентам
     */
    public function nop()
    {}
    
    /**
     * Метод для связывания поддомена с IPv4-адресом, доступен клиентам
     */
    public function addAlias()
    {}
    
    /**
     * Метод для cвязывания поддомена с IPv6-адресом, доступен клиентам
     */
    public function addAaaa()
    {}
    
    /**
     * Метод для связывания поддомена с именем другого домена, доступен клиентам
     */
    public function addCname()
    {}
    
    /**
     * Метод для указания почтового сервера в виде доменного имени или IP-адреса,
     * который будет принимать почту для вашего домена, доступен клиентам
     */
    public function addMx()
    {}
    
    /**
     * Метод для передачи управления поддоменами на другие DNS-сервера, доступен клиентам
     */
    public function addNs()
    {}
    
    /**
     * Метод для добавления произвольной текстовой записи (TXT) для поддомена
     */
    public function addTxt()
    {}
    
    /**
     * Метод для добавления сервисной записи, доступен клиентам
     */
    public function addSrv()
    {}
    
    /**
     * Метод для добавkления записи Sender Policy Framework (SPF) для поддомена, доступен клиентам
     */
    public function addSpf()
    {}
    
    /**
     * Метод для получения ресурсных записей зоны для каждого поддомена, доступен клиентам
     */
    public function getResourceRecords()
    {}
    
    /**
     * Метод для добавления/удаления нескольких ресурсных записей одним запросом, доступен партнерам
     */
    public function updateRecords()
    {}
    
    /**
     * Метод для изменения время жизни кеша для зоны, доступен клиентам
     */
    public function updateSoa()
    {}
    
    /**
     * Метод для настройки зоны для web-форвардинга, доступен клиентам
     */
    public function tuneForwarding()
    {}
    
    /**
     * Метод для удаления записи настройки зоны для web-форвардинга, доступен клиентам
     */
    public function clearForwarding()
    {}
    
    /**
     * Метод для настройки зоны для парковки, доступен клиентам
     */
    public function tuneParking()
    {}
    
    /**
     * Метод для удаления записи настройки зоны для парковки, доступен клиентам
     */
    public function clearParking()
    {}
    
    /**
     * Метод для удаления ресурсной записи, доступен клиентам
     */
    public function removeRecord()
    {}
    
    /**
     * Метод для удаления всех ресурсных записей зоны, доступен клиентам
     */
    public function clear()
    {}
}
