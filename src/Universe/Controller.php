<?php

namespace Universe;

use Universe\Middlewares\BaseMiddleware;

/***
    κ₯ ππΈππ½π 
    κ₯ πππ π½π£ππππ¨π π£π ππ π£ ππππ£π₯ πΉπππ-πΌππ 
    κ₯ πΈπ¦π₯ππ π£: πππ₯ππππ€ππ¦πππ£ π [ππ₯π₯π‘π€://πππ₯ππππ€π.ππ€.π π£π]
 ***/

class Controller
{
    public string $layout = 'main';
    public string $action = '';

    protected array $middlewares = [];

    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }

    public function view($view, $params = []): string
    {
        return Application::$app->router->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}
