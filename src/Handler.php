<?php
namespace Bee\Router;

/**
 * Handler
 *
 * @package Star\Router
 */
class Handler implements HandlerInterface
{
    /**
     * @var string
     */
    protected $method;

    /**
     * @var array
     */
    protected $handler;

    /**
     * @var string
     */
    protected $routePattern;

    /**
     * Handler
     *
     * @param string $method
     * @param string $routePattern
     * @param array $handler
     */
    public function __construct(string $method, string $routePattern, array $handler)
    {
        $this->method       = $method;
        $this->routePattern = $routePattern;
        $this->handler      = $handler;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return array
     */
    public function getHandler(): array
    {
        return $this->handler;
    }

    /**
     * @return string
     */
    public function getRoutePattern(): string
    {
        return $this->routePattern;
    }

    /**
     * 执行路由项业务
     *
     * @param mixed $context
     * @param mixed $parameters
     * @return mixed
     */
    public function callMethod($context, $parameters = null)
    {
        return call_user_func($this->handler, $context, $parameters);
    }
}
