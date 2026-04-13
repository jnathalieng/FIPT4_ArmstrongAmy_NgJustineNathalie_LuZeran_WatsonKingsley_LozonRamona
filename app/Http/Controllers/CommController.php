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


    // TRAINING THREE CARDS CRUD FUNCTIONALITY BLOCK
    public function storeCommThree(Request $request)
    {
        // create a new comm3 card
        $commThree = TrainingThree::create($request->all());

        return response()->json($commThree);
    }

    public function updateCommThree(Request $request, $id)
    {
        // updating a comm3 card
        $commThree = TrainingThree::findOrFail($id);
        $commThree->update($request->all());
        
        return response()->json($commThree);
    }

    public function destroyCommThree($id)
    {
        TrainingThree::findOrFail($id)->delete();
        
        return response()->json(['message' => 'This commemorative card (training three) has been deleted successfully.']);
    }
    


    // TRAINING FOUR CARDS CRUD FUNCTIONALITY BLOCK
    public function storeCommFour(Request $request)
    {
        // create a new comm4 card
        $commFour = TrainingFour::create($request->all());

        return response()->json($commFour);
    }

    public function updateCommFour(Request $request, $id)
    {
        // updating a comm4card
        $commFour = TrainingFour::findOrFail($id);
        $commFour->update($request->all());
        
        return response()->json($commFour);
    }

    public function destroyCommFour($id)
    {
        TrainingFour::findOrFail($id)->delete();
        
        return response()->json(['message' => 'This commemorative card (training 4) has been deleted successfully.']);
    }
}