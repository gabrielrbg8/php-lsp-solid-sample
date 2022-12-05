<?php

declare(strict_types=1);

namespace Classes;

use Exception;

class AuthApi extends Auth
{
    /**
     * Make authentication
     * 
     * @param mixed $credentials
     * @return array
     */
    public function authenticate($credentials)
    {
        $this->checkUserAge($credentials);
        return ['auth' => true, 'status' => 201];
    }

    /**
     * Check if user is adult
     * 
     * @param mixed $credentials
     * @return void
     */
    public function checkUserAge($credentials)
    {
        if (isset($credentials['age'])) {
            throw new Exception('Auth API dont has age', 422);
        }
    }
}
