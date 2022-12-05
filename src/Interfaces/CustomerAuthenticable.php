
<?php

require_once 'Interfaces/Authenticable.php';

interface CustomerAuthenticable extends Authenticable
{
    /**
     * Check if user is adult
     * 
     * @param array|mixed $credentials
     * @return boolean
     */
    public function checkUserAge($credentials);
}