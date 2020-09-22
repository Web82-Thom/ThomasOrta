<?php

namespace Controller;

class PostCleanController
{ 
    function postClean()
    {
        $postClean = filter_var_array($_POST);
    }   
}