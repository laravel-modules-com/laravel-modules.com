<?php

function current_version(): string
{
    return request()->segment(2);
}

function current_page(): string
{
    return request()->segment(3);
}
