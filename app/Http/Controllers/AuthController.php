<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return[
            'NIS' => '3103119188',
            'Name' => 'Tiara Ramadhani Mahendra Putra',
            'Gender' => 'Laki-laki',
            'Phone' => '083146134063',
            'Class' => 'XII RPL 6',
        ];
    }
}