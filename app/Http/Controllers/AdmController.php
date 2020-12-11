<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelVestibular;
use Illuminate\Support\Facades\Auth;

class AdmController extends Controller
{

     private $objVest;

    public function __construct()
    {
   $this->objVest=new ModelVestibular();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
       
        $vest=$this->objVest->all();
        return view('adm.index', compact('vest'));
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('adm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objVest->create([
              'inst'=>$request->inst,
               'site'=>$request->site,
                'ano'=>$request->ano,
                 'mat'=>$request->mat,
                  'gram'=>$request->gram,
                   'lit'=>$request->lit,
                    'texto'=>$request->texto,
                     'ing'=>$request->ing,
                      'bio'=>$request->bio,
                       'quim'=>$request->quim,
                        'fis'=>$request->fis,
                         'hist'=>$request->hist,
                          'geo'=>$request->geo,
                           'socio'=>$request->socio

        ]);
        if($cad){
            return redirect('adm');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $adm=$this->objVest->find($id);
        return view('adm.show', compact('adm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $vest=$this->objVest->find($id);
         return view('adm.create',compact('vest'));
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
       $cad=$this->objVest->where(['id'=>$id])->update([
      
              'inst'=>$request->inst,
               'site'=>$request->site,
                'ano'=>$request->ano,
                 'mat'=>$request->mat,
                  'gram'=>$request->gram,
                   'lit'=>$request->lit,
                    'texto'=>$request->texto,
                     'ing'=>$request->ing,
                      'bio'=>$request->bio,
                       'quim'=>$request->quim,
                        'fis'=>$request->fis,
                         'hist'=>$request->hist,
                          'geo'=>$request->geo,
                           'socio'=>$request->socio

        ]);
        if($cad){
            return redirect('adm');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del =$this->objVest->destroy($id);
        return($id)?"Sim":"Não";
    }
     public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){

      
      $credentials = [
        'email' => $request-> email,
        'password' => $request-> password

      ];
      if(Auth::attempt($credentials)){
        return redirect()->route('adm.index');
      }
    }
}
