<?php

/**
* 
*/
class QueueController extends \BaseController
{
    public function __construct()
    {
    }

    /**
    * Show a list of Messages
    * @todo accept filters, by default only show queued messsages
    * @todo some sort of pagination
    */
    public function index()
    {
        $messages = [];
        return View::make('messages')->with('messages', $messages);
    }
}

