<?php

use GrahamCampbell\Markdown\Facades\Markdown;

/**
 * 将文本转换成markdown
 * @param $str
 * @return mixed
 */
function markdown($str)
{
    return Markdown::convertToHtml($str);
}