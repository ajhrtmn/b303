<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
	public function fourOhFour()
	{

		return [

			'alert' => '404',

			'alert_sub' => 'This page does not exist quite yet.'

		];

	}
}
