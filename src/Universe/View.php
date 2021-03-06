<?php

namespace Universe;

/***
     κ₯ ππΈππ½π 
     κ₯ πππ π½π£ππππ¨π π£π ππ π£ ππππ£π₯ πΉπππ-πΌππ 
     κ₯ πΈπ¦π₯ππ π£: πππ₯ππππ€ππ¦πππ£ π [ππ₯π₯π‘π€://πππ₯ππππ€π.ππ€.π π£π]
 ***/
class View
{
    public string $title = '';

    public function renderView($view, array $params)
    {
        $layoutName = Application::$app->layout;
        if (Application::$app->controller) {
            $layoutName = Application::$app->controller->layout;
        }
        $viewContent = $this->renderViewOnly($view, $params);
        ob_start();
        include_once Application::$ROOT_DIR . "/views/layouts/$layoutName.php";
        $layoutContent = ob_get_clean();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function renderViewOnly($view, array $params)
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include_once Application::$ROOT_DIR . "/views/$view.php";
        return ob_get_clean();
    }
}
