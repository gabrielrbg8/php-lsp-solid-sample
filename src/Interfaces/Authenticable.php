
<?php

interface Authenticable
{
    /**
     * Make authentication
     * 
     * @param array|mixed $credentials
     * @return boolean
     */
    public function authenticate($credentials);
}