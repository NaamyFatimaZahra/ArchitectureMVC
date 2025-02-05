<?php

namespace App\Core;


class  Controller
{
    public function view($page)
    {
        require __DIR__.'\..\Views\\'.$page.'.php'; 
    }

}

