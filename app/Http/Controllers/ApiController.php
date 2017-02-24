<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
	$user = User::find($userId);

	$addresses = $user->addresses;

	return reponse()->json(['addresses' => $addresses], 200);
	
}
