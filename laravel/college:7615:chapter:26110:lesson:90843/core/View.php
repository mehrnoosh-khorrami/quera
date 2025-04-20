<?php

namespace Core;

class View
{
    public static function render(string $view, array $parameters = []): string
    {
        $output = file_get_contents(__DIR__ .'/../app/Views/'.$view.'.html');
        $output = preg_replace_callback(
            '/{{ (.*?) }}/',
            function ($matche) use ($parameters) {
                return $parameters[$matche[1]] ?? '';
            },
            $output
        );
        return $output;
    }
}
