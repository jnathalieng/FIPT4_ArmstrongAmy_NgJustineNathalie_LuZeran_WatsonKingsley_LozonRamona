<?php
namespace App\Http\Controllers;
use App\Models\Comm;
use App\Models\TrainingThree;
use App\Models\TrainingFour;
use Illuminate\Http\Request;

class CommController extends Controller
{
    public function index()
    {
        $commMembers = Comm::all();
        $trainingThree = TrainingThree::all();
        $trainingFour = TrainingFour::all();

        return view('comm', [
            'commMembers' => $commMembers,
            'trainingThree' => $trainingThree,
            'trainingFour' => $trainingFour,
            ]);
    }
}