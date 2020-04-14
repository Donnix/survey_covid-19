<?php
  namespace App\Http\Controllers;

  
  use App\User;
  use View;
  use Illuminate\Http\Request;
  use DB;
class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
        return view('survey.index');
    
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $survey = User::all();
        return view('survey.add');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     
    {  
         DB::beginTransaction();
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->jumlah_ya = $request->jumlah_ya;
        $data->jumlah_tidak = $request->jumlah_tidak;
        $data->save();

        $id = $request->id;

        DB::update("
            UPDATE users
            SET token = token + 1
            WHERE id = ?
        ", [$id]);

        DB::commit();
        return view::make('survey.add',compact('data'));
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function show(Survey $survey)
    {
       
       
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function edit(Survey $survey)
    {
       
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Survey $survey)
    {
      
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey)
    {
    }
}