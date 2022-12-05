<?php

declare(strict_types=1);

namespace Classes;

require_once 'Interfaces/Authenticable.php';

use Authenticable;

class AuthApi implements Authenticable
{
    /**
     * Make authentication
     * 
     * @param mixed $credentials
     * @return array
     */
    public function authenticate($credentials)
    {
        return true;
    }
}
