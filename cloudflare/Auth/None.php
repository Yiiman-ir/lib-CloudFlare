<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 04/09/2017
 * Time: 19:55
 */

namespace system\lib\cloudflare\Auth;

class None implements Auth
{
    public function getHeaders(): array
    {
        return [];
    }
}
