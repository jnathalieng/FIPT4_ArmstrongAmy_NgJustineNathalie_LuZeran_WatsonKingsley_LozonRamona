<?php
namespace App\Http\Controllers;
use App\Models\Comm;
use Illuminate\Http\Request;

class CommController extends Controller
{
    public function index()
    {
        $commMembers = Comm::all();
        return view('comm', ['commMembers' => $commMembers]);
    }
}