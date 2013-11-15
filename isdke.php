<?php

/**
 * Extends the default functionality of the InfusionSoft PHP iSDK class
 */
 
 class iSDKE extends iSDK 
 {
    public
        $sleep;
        
    public function __construct($name, $key)
    {
        $this->sleep = 500;
        
    }
    
    public function methodCaller($service, $callArray)
    {
         = (int)$this->sleep;
        sleep($sleep);
        return parent::methodCaller($service, $callArray);
    }
 
 }
