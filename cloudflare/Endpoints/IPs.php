<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 04/09/2017
 * Time: 19:56
 */

namespace system\lib\cloudflare\Endpoints;

use system\lib\cloudflare\Adapter\Adapter;
use system\lib\cloudflare\Traits\BodyAccessorTrait;

class IPs implements API
{
    use BodyAccessorTrait;

    private $adapter;

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function listIPs(): \stdClass
    {
        $ips = $this->adapter->get('ips');
        $this->body = json_decode($ips->getBody());

        return $this->body->result;
    }
}
