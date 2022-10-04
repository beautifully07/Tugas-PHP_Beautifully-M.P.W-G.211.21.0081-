<?php 
interface a
{
    public function foo ();
}

interface b
{
    public function bar ();
}

interface c extends a, b
{
    public function baz ();
}

class d implements c
{
    public function foo () 
    {
    }

    public function bar ()
    {
    }

    public function baz ()
    {

    }
}

interface m extends a
{
    public function bar ();
}

class e implements m
{
    public function foo () 
    {
    }

    public function bar ()
    {
    }
}
?>