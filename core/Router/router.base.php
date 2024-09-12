<?

namespace Core\Router;

abstract class Router
{
    public $router = [
        'GET' => [],
        'POST' => [],
        'PUT' => [],
        'PATH' => [],
        'DELETE' => [],
    ];

    public function addGet(string $url, $controller): void
    {
        $router['GET'][] = [
            'url' => $url,
            'controller' => $controller
        ];
    }

    public function addPost(string $url, $controller): void
    {
        $router['POST'][] = [
            'url' => $url,
            'controller' => $controller
        ];
    }

    public function addPut(string $url, $controller): void
    {
        $router['PUT'][] = [
            'url' => $url,
            'controller' => $controller
        ];
    }

    public function addPath(string $url, $controller): void
    {
        $router['PATH'][] = [
            'url' => $url,
            'controller' => $controller
        ];
    }

    public function addDelete(string $url, $controller): void
    {
        $router['DELETE'][] = [
            'url' => $url,
            'controller' => $controller
        ];
    }

    public function parseUrl($url) {}

    public function getParams() {}
}
