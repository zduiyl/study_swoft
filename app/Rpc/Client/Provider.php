<?php
/**
 * Created by PhpStorm.
 * User: ZDuiy
 * Date: 2019/5/25
 * Time: 22:48
 * 服务提供者
 */

namespace App\Rpc\Client;


use \Swoft\Rpc\Client\Contract\ProviderInterface;

class Provider implements ProviderInterface
{
    public function getList(): array
    {
        // TODO: Implement getList() method.
        //写死地址，可以从consul中获取
        return ["127.0.0.1:9508","127.0.0.1:9506"];
    }
}