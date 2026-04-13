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

    // COMMEMORATING CARDS CRUD FUNCTIONALITY BLOCK
    public function storeComm(Request $request)
    {
        // create a new comm card
        $comm = Comm::create($request->all());

        return response()->json($comm);
    }

    public function updateComm(Request $request, $id)
    {
        // updating a comm3 card
        $comm = Comm::findOrFail($id);
        $comm->update($request->all());
        
        return response()->json($comm);
    }

    public function destroyComm($id)
    {
        Comm::findOrFail($id)->delete();
        
        return response()->json(['message' => 'This commemorative card has been deleted successfully.']);
    }

}