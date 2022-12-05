<?php

declare(strict_types=1);

namespace Classes;

class Auth
{
    /**
     * Make authentication
     * 
     * @param mixed $credentials
     * @return true
     */
    public function authenticate($credentials)
    {
        return true;
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
