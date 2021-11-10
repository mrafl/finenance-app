<?php

function argon($dir)
{
       return env('ENGINE') == 'artisan' ? asset("argon/$dir") : asset("public/argon/$dir");
}
