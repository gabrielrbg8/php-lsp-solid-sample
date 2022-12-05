<?php

declare(strict_types=1);

namespace Classes;

require_once 'Interfaces/CustomerAuthenticable.php';
use CustomerAuthenticable;

class Auth implements CustomerAuthenticable
{
    /**
     * Make authentication
     * 
     * @param mixed $credentials
     * @return true
     */
    public function authenticate($credentials)
    {
        return $this->checkUserAge($credentials);
    }

    /**
     * Check if user is adult
     * 
     * @param mixed $credentials 
     * @return true
     */
    public function checkUserAge($credentials)
    {
        return $credentials['age'] >= 18;
    }
}
