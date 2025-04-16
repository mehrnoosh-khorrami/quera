<?php

function getArea(Shape $shape): string
{
    return get_class($shape). ": " . $shape->getArea();
}
