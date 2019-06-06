<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registry;
use Illuminate\Support\Facades\Input;

class RegistryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registries = Registry::all()->toArray();
        return view('registries.index', compact('registries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $registry = $this->validate(request(), [
            'first_name' => 'required',
            'surename' => 'required',
            'email' => 'required|email',
            'age' => 'integer|min:0'
          ]);
        
          $flosspainfo = Input::get('flosspainfo') == 'on' ? true :false;
          $fedorainfo = Input::get('fedorainfo') == 'on' ? true :false;
          $latansecinfo = Input::get('latansecinfo') == 'on' ? true :false;
          
          Registry::create([
            'first_name'=> Input::get('first_name'),
            'second_name'=> Input::get('second_name'),
            'surename'=> Input::get('surename'),
            'second_surename'=> Input::get('second_surename'),
            'email'=> Input::get('email'),
            'cell_phone' => Input::get('cell_phone'),
            'phone'=> Input::get('phone'),
            'coments'=> Input::get('coments'),
            'age'=> Input::get('age'),
            'flosspainfo'=> $flosspainfo,
            'fedorainfo'=>  $fedorainfo,
            'latansecinfo'=>  $latansecinfo
          ]);
  
          return back()->with('success', 'Información almacenada con éxito');
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
        $registry = Registry::find($id);
        return view('registries.edit',compact('registry','id'));
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
        $registry = Registry::find($id);
        $this->validate(request(), [
            'first_name' => 'required',
            'surename' => 'required',
            'email' => 'required|email',
            'age' => 'integer|min:0'
          ]);
        
          $registry->first_name = Input::get('first_name');
          $registry->second_name =  Input::get('second_name');
          $registry->surename = Input::get('surename');
          $registry->second_surename =  Input::get('second_surename');
          $registry->email = Input::get('email');
          $registry->cell_phone =  Input::get('cell_phone');
          $registry->phone = Input::get('phone');
          $registry->coments = Input::get('coments');
          $registry->age = Input::get('age');
          $registry->flosspainfo = Input::get('flosspainfo') == 'on' ? true :false;
          $registry->fedorainfo = Input::get('fedorainfo') == 'on' ? true :false;
          $registry->latansecinfo = Input::get('latansecinfo') == 'on' ? true :false;
          $registry->save();
          
  
          return back()->with('success', 'Registry updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registry = Registry::find($id);
        $registry->delete();
        return redirect('registries')->with('success','Registry has been  deleted');
    }
}
