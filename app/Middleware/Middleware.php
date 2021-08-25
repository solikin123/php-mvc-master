<?php

namespace Solikin\PHP\MVC\Middleware;

interface Middleware
{
    function before(): void;
}