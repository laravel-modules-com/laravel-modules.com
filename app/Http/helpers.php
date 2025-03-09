<?php

function toc(string $html): array
{
    preg_match_all('/<h([1-6])*[^>]*>(.*?)<\/h[1-6]>/', $html, $matches);

    $index = '<ul>';
    $prev  = 2;

    foreach ($matches[0] as $i => $match) {
        $curr   = $matches[1][$i];
        $text   = strip_tags($matches[2][$i]);
        $slug   = strtolower(str_replace('--', '-', preg_replace('/[^\da-z]/i', '-', $text)));
        $anchor = '<a name="'.$slug.'">'.$text.'</a>';
        $html   = str_replace($text, $anchor, $html);

        $prev <= $curr ?: $index .= str_repeat('</ul>', ($prev - $curr));
        $prev >= $curr ?: $index .= '<ul>';

        $index .= '<li><a href="#'.$slug.'">'.$text.'</a></li>';

        $prev = $curr;
    }

    $index .= '</ul>';

    return ['html' => $html, 'index' => $index];
}

function current_version(): string
{
    return request()->segment(2);
}

function current_page(): string
{
    return request()->segment(3);
}
