<?php
/* 
 * Класс для работы с доменами
 * 
 * @author     Anton Popov <an.popov@list.ru>
 * @author     Maxim Isaev <sparker.max@gmail.com>
 * @copyright  Copyright (c) 2015 Kopeisk Information Technologies
 */

/**
 * Класс для работы с доменами
 */
class Domain
{
    /**
     * Тестовый метод, доступен всем
     */
    public function nop()
    {}
    
    /**
     * Метод для получения цен на регистрацию/продление доменов во всех доступных зонах, доступен всем
     */
    public function getPrices()
    {}
    
    /**
     * Метод для подбора имени домена, доступен партнерам
     */
    public function getSuggest()
    {}
    
    /**
     * Метод для получения списка премиум-доменов, доступен партнерам
     */
    public function getPremium()
    {}
    
    /**
     * Метод для получения списка освобождённых доменов, доступен партнерам
     */
    public function getDeleted()
    {}
    
    /**
     * Метод для проверки доступности регистрации домена, доступен партнерам
     */
    public function check()
    {}
    
    /**
     * Метод для подачи заявки на регистрацию домена, доступен клиентам
     */
    public function create()
    {}
    
    /**
     * Метод для подачи заявки на перенос домена от другого регистратора, доступен клиентам
     */
    public function transfer()
    {}
    
    /**
     * Метод для получения списка освобождающихся доменов с характеристиками,
     * после регистрации или продления домены удаляются из списка, доступен партнерам
     */
    public function getReregData()
    {}
    
    /**
     * Метод для задания ставки на освобождающиеся домены, доступен клиентам
     */
    public function setReregBids()
    {}
    
    /**
     * Метод для получения своих ставок на освобождающиеся домены,
     * после регистрации или продления домены удаляются из списка, доступен клиентам
     */
    public function getUserReregBids()
    {}
    
    /**
     * Метод для получения ссылки на закачивание документов из интернета для .RU/.SU/.РФ доменов, доступен клиентам
     */
    public function getDocsUploadUri()
    {}
    
    /**
     * Метод для обновления контактных данных доменов, доступен клиентам
     */
    public function updateContacts()
    {}
    
    /**
     * Метод для изменения флагов «Private Person» и «Total Private Person» скрытия/отображения контактных данных в whois,
     * доступен клиентам
     */
    public function updatePrivatePersonFlag()
    {}
    
    /**
     * Метод для внесения nameserver в NSI-registry, доступен всем
     */
    public function registerNs()
    {}
    
    /**
     * Метод для удаления nameserver из NSI-registry, доступен всем
     */
    public function deleteNs()
    {}
    
    /**
     * Метод для получения DNS серверов доменов, доступен клиентам
     */
    public function getNss()
    {}
    
    /**
     * Метод для изменение списка DNS серверов, доступен клиентам
     */
    public function updateNss()
    {}
    
    /**
     * Метод для установки флага делегирования домена, доступен партнерам
     */
    public function delegate()
    {}
    
    /**
     * Метод для снятия флага делегирования домена, доступен партнерам
     */
    public function undelegate()
    {}
    
    /**
     * Метод для передачи домена на другой аккаунт, доступен партнерам
     */
    public function transferToAnotherAccount()
    {}
    
    /**
     * Метод для просмотра списка передаваемых доменов, доступен партнерам
     */
    public function lookAtEnteringList()
    {}
    
    /**
     * Метод для принятия или отклонения передаваемого домена, доступен партнерам
     */
    public function acceptOrRefuseEnteringList()
    {}
    
    /**
     * Метод для отправки заявки на перенос доменов на свой аккаунт, доступен партнёрам
     * c сервисным планом "Партнёр 2" или выше
     */
    public function requestToTransfer()
    {}
}
