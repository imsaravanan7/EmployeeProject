<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class EmployeeController extends Controller
{
    public $employer;
    public function __construct(){
        $this->employer=new employee();
    }
    public function index(){
    
        return $this->employer->all();
        
    }

    public function store(Request $request){
        return $this->employer->create($request->all());
    }
    
    public function show(string $id){
        return $employer=$this->employer->find($id);
    }

    public function update(Request $request,string $id){
        $employer=$this->employer->find($id);
        $employer->update($request->all());
        return $employer;
    }

    public function destroy(string $id){
        $employer=$this->employer->find($id);
        return $employer->delete();
    }
}
