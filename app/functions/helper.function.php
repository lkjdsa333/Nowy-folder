<?php

function showStatusIcon($status)
{
    if($status == 0)
    {
        return '<i class="fa fa-minus text-danger" aria-hidden"true"></i>';

    }
    else
    {
        return '<i class="fa fa-check text-success" aria-hidden="true"></i>';
    }
}