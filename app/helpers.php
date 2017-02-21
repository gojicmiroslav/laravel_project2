<?php

function flash($message, $type = 'notice')
{
	session()->flash('flash_message', $message);
	session()->flash('flash_type', $type);
}