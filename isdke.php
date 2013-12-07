<?php

/**
 * Extends the default functionality of the InfusionSoft PHP iSDK class
 */
 
 class iSDKE extends iSDK 
 {
    public
        $sleep;
        
    public function __construct($name, $key = "", $dbOn = "on", $type = "i")
    {
        $this->sleep = .5;
        $this->cfgCon($name, $key, $dbOn, $type)
        
    }
    
    public function methodCaller($service, $callArray)
    {
        sleep($this->sleep);
        return parent::methodCaller($service, $callArray);
    }
 
 }
