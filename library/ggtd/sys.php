<?php
/**
 * Collection of static methods to handle systemwide, system relevant 
 * operations and default settings
 *
 * @author rags
 */
class sys {
    
    const CURRENT_VERSION   = '0.0.1';
    
    public static function getVersion()
    {
        return self::CURRENT_VERSION;
    }
}


