<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Question;
use App\Answere;
use App\GetAnswere;
use Illuminate\Support\Facades\Auth;
class QuestionAnsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question=Question::all();
        $answer=Answere::get();

        return view('questions')->with('answer',$answer)->with('question',$question);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $answer=$request->answere_id;

           $qid=1;
       foreach ($answer as $get) {
           GetAnswere::create([
            'question_id' =>  $qid++,
            'answere_id' => $get,
            'user_id' => Auth::User()->id,
        ]);
       }
       User::where('id',Auth::User()->id)->update([
        'status'=>1
    ]);

    return redirect('decision');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
