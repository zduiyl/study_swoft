<?php declare(strict_types=1);


namespace App\Aspect;
use Swoft\Aop\Annotation\Mapping\After;
use Swoft\Aop\Annotation\Mapping\AfterReturning;
use Swoft\Aop\Annotation\Mapping\AfterThrowing;
use Swoft\Aop\Annotation\Mapping\Around;
use Swoft\Aop\Annotation\Mapping\Aspect;
use Swoft\Aop\Annotation\Mapping\Before;
use Swoft\Aop\Annotation\Mapping\PointBean;
use Swoft\Aop\Annotation\Mapping\PointExecution;

/**
 * Class DemoAspect
 *
 * @since 2.0
 *
 * @Aspect(order=1)
 *
 * @PointBean(
 *     include={
 *      "${Swoft\Rpc\Client\Proxy}"
 *     }
 * )
 *
 */
class TestAspect
{
    /**
     * @Before()
     */
    public function before()
    {
        var_dump(' before1 ');
    }

    /**
     * @After()
     */
    public function after()
    {
        var_dump(' after1 ');
    }

    /**
     * @AfterReturning()
     */
    public function afterReturn(JoinPoint $joinPoint)
    {
        $result = $joinPoint->getReturn();
        return $result.' afterReturn1 ';
    }

    /**
     * @Around()
     * @param ProceedingJoinPoint $proceedingJoinPoint
     * @return mixed
     */
    public function around(ProceedingJoinPoint $proceedingJoinPoint)
    {
        $this->test .= ' around-before1 ';
        $result = $proceedingJoinPoint->proceed();
        $this->test .= ' around-after1 ';
        return $result.$this->test;
    }

    /**
     * @AfterThrowing()
     */
    public function afterThrowing()
    {
        echo "aop=1 afterThrowing !\n";
    }
}