<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Reservering;

class ReserveringenController extends Controller
{
    public function index() {
        return Reservering::all();
    }
}
