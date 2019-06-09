<?php
namespace Bee\Router;

/**
 * Interface HandlerInterface
 *
 * @package Star\Router
 */
interface HandlerInterface
{
    /**
     * 执行路由项业务
     *
     * @param $context
     * @param mixed $parameters
     * @return mixed
     */
    public function callMethod($application, $parameters = null);
}
