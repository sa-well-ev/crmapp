<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 19.04.2018
 * Time: 13:06
 */
namespace app\utilities;

use yii\helpers\Markdown;
use yii\base\ViewRenderer;

class MarkdownRenderer extends ViewRenderer
{
    public function render($view, $file, $params)
    {
        return Markdown::process(file_get_contents($file));
    }
}