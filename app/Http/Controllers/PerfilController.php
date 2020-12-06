<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PerfilController extends Controller
{

     private $objUser;

    public function __construct()
    {
   $this->objUser=new User();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        $user=$this->objUser->all();
        return view('perfils.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('perfils.create');
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
              'name'=>$request->name,
               'email'=>$request->email,
                 'password'=>$request->password,
             

        ]);
        if($cad){
            return redirect('perfils');
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
        $user=$this->objUser->find($id);
        return view('perfils.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user=$this->objUser->find($id);
         return view('perfils.create',compact('user'));
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
      
              'name'=>$request->name,
               'email'=>$request->email,
                 'password'=>$request->password,
                           'socio'=>$request->socio

        ]);
        if($cad){
            return redirect('perfils');
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
        
        $del =$this->objUser->destroy($id);
        return($id)?"Sim":"Não";
    }
}

    