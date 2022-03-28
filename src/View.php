<?php

declare(strict_types=1);

namespace App;

use App\Exceptions\ViewNotFoundException;

class View
{
    public function __construct(protected string $view, protected array $params = [])
    {
    }

    public function render()
    {
        $viewPath = VIEWS_PATH.$this->view.'.php';

        if (!file_exists($viewPath)) {
            throw new ViewNotFoundException();
        }

        ob_start();

        include $viewPath;

        return ob_get_clean();
    }

    public function __get(mixed $variable)
    {

        return $this->params[$variable];
    }
}