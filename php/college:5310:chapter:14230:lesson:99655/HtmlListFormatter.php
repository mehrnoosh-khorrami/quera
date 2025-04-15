<?php

class HtmlListFormatter extends ListFormatter
{
    public function format(): string
    {
        $f_data = '<ul>';
        $dataArray = $this->getData();
        foreach ($dataArray as $d) {
            $f_data .= "<li>$d</li>";
        }
        $f_data .= "</ul>";
        return $f_data;
    }
}
