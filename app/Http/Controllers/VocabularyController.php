<?php 

namespace App\Http\Controllers;

use App\Models\Vocabulary;
use Illuminate\Http\Request;

class VocabularyController extends Controller
{
    public function index()
    {
        $vocabularies = Vocabulary::all();
        return view('vocabulary.index', compact('vocabularies'));
    }

    public function create()
    {
        return view('vocabulary.create');
    }

    public function store(Request $request)
    {
        $vocabulary = new Vocabulary();
        $vocabulary->word = $request->input('word');
        $vocabulary->meaning = $request->input('meaning');
        $vocabulary->save();

        return redirect()->route('vocabulary.index');
    }

    public function show($id)
    {
        $vocabulary = Vocabulary::findOrFail($id);
        return view('vocabulary.show', compact('vocabulary'));
    }
}

