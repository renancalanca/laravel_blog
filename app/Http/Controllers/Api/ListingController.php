<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListingController extends Controller
{
    public function users()
    {
        $users = User::paginate(10);

        return $users;
    }
}
