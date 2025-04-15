<?php

class JsonListFormatter extends ListFormatter
{
    public function format(): string
    {
        return json_encode($this->getData());
    }
}
