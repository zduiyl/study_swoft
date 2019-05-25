<?php
/**
 * Created by PhpStorm.
 * User: ZDuiy
 * Date: 2019/5/25
 * Time: 22:45
 */


namespace App\Rpc\Client;
use Swoft\Rpc\Client\Contract\ProviderInterface;

/**
 * Class Client
 * @package App\Rpc\Client
 */
class Client extends \Swoft\Rpc\Client\Client
{
    /**
     * @desc 重写框架的方法
     */

    public function getProvider(): ?ProviderInterface
    {
        return $this->provider = new Provider();
    }

}