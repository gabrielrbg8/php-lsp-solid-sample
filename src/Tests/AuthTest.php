<?php

declare(strict_types=1);

require_once 'Classes/Auth.php';
require_once 'Classes/AuthApi.php';

use Classes\Auth;
use Classes\AuthApi;
use PHPUnit\Framework\TestCase;

final class AuthTest extends TestCase
{
    public function testAuth()
    {
        $auth = new Auth;
        $credentials = ['age' => 18];

        $this->assertTrue($auth->authenticate($credentials));
    }

    public function testAuthApi()
    {
        $auth = new AuthApi;
        $credentials = ['age' => 0];

        $this->assertTrue($auth->authenticate($credentials));
    }
}
