<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Models\Question;
use App\Models\UserProfil;
use App\Models\Image;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = Question::with('categorie')->paginate(5);
        return response()->json([
            'status' => 'success',
            'message' => "liste des questionnaires ",
            'data' => $question
        ]);
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    {
        Question::create([
            'user_id' => $request->input('user_id'),
            'categorie_id' => $request->input('categorie_id'),
            'content' => $request->input('content')
        ]);
        $q = Question::where('user_id', (int)$request->input('user_id'))->with('categorie');
        return response()->json([
            'status' => 'success',
            'message' => "question enregistrer  ",
            'data' => $q
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $q = Question::where('id', $id)
            ->with(['user', 'categorie', 'image'])->get();
        if ($q) {
            return response()->json([
                'status' => 'success',
                'message' => 'la question id:' . $id,
                'data' => $q
            ]);
        }
        return response()->json([
            'status' => 'error',
            'message' => 'la question id:' . $id . "n'existe pas",
            'data' => $q
        ]);
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionRequest $request, $id)
    {
        Image::create([
            'src' => $request->input('image')['src']
        ]);
        $question = Question::find($id);
        if (!$question) {
            return response()->json([
                'status' => 'erreur',
                'message' => 'Question non trouvée',
            ], 404);
        }

        $question->content = $request->input('content');
        $question->categorie_id = $request->input('categorie_id');
        $question->image_id = Image::where('src', $request->input('image')['src'])->first()->id;
        $question->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Question mise à jour avec succès',
            'data' => $question
        ]);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);

        if (!$question) {
            return response()->json([
                'status' => 'erreur',
                'message' => 'Question non trouvée',
            ], 404);
        }

        // Supprimez la question de la base de données
        $question->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Question supprimée avec succès',
        ]);
        //
    }
}
