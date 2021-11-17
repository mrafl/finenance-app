<?php

function argon($dir)
{
       return env('ENGINE') == 'artisan' ? asset("argon/$dir") : asset("public/argon/$dir");
}

function bootslander($dir)
{
       return env('ENGINE') == 'artisan' ? asset("bootslander/$dir") : asset("public/bootslander/$dir");
}

function stisla($dir)
{
       return env('ENGINE') == 'artisan' ? asset("stisla/$dir") : asset("public/stisla/$dir");
}

function jadoo($dir)
{
       return env('ENGINE') == 'artisan' ? asset("jadoo/$dir") : asset("public/jadoo/$dir");
}
