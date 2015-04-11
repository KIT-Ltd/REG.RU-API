<?php
/* 
 * Reg.ru API класс
 * API документация: https://www.reg.ru/support/help/API-version2
 * 
 * @author     Anton Popov <an.popov@list.ru>
 * @author     Maxim Isaev <sparker.max@gmail.com>
 * @copyright  Copyright (c) 2015 Kopeisk Information Technologies
 */

namespace RegRu;

class Api
{
    protected $login;
    protected $password;
    protected $url;
    
    public function __construct($login, $password, $url = 'https://api.reg.ru/api/regru2/')
    {
        $this->login = $login;
        $this->password = $password;
        $this->url = $url;
    }
    
    /**
     * Тестовый метод, доступен всем
     */
    public function nop()
    {
        return $this->send();
    }
    
    /**
     * Тестовый метод, доступен партнерам
     */
    public function resellerNop()
    {
        return $this->send();
    }
    
    /**
     * Возвращает идентификатор авторизованного пользователя, доступен клиентам
     */
    public function getUserId()
    {
        return $this->send();
    }
    
    /**
     * Получение id домена или услуги, доступен клиентам
     */
    public function getServiceId($serviceId)
    {
        return $this->send(get_defined_vars());
    }
    
    protected function send(array $params = array())
    {
        foreach ($params as $key => $param) {
            unset($params[$key]);
            $params[strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $key))] = $param;
        }
        $params = array_merge(array('username' => $this->login, 'password' => $this->password), $params);
        $backtrace = end(debug_backtrace(false));
        $category = lcfirst($backtrace['class']);
        if (false !== $pos = strrpos($category, '\\')) {
            $category = lcfirst(substr($category, $pos + 1));
        }
        $function = strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $backtrace['function']));
        $url = $this->url . ('api' !== $category ? $category .'/' : '') . $function .'?'. http_build_query($params, '', '&') . '&input_format=json';
        return json_decode(file_get_contents($url), true);
    }
    
    public function __call($method, $params)
    {
        $params = array_replace(array($this->login, $this->password, $this->url), $params);
        $category = __NAMESPACE__ .'\\'. ucfirst($method);
        if (class_exists($category)) {
            $reflectionClass = new \ReflectionClass($category);
            return $reflectionClass->newInstanceArgs($params);
        }
    }
}