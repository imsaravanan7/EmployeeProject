<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\designation;

class DesignationController extends Controller
{
    public $designater;
    public function __construct(){
        $this->designater=new designation();
    }
    public function index()
    {
        
        return $this->designater->all();
    }

    public function store(Request $request)
    {
        return $this->designater->create($request->all());
    }

    public function show(string $id)
    {
        return $designater=$this->designater->find($id);
    }

    public function update(Request $request, string $id)
    {
        $designater=$this->designater->find($id);
        $designater->update($request->all());
        return $designater;
    }

    public function destroy(string $id)
    {
        $designater=$this->designater->find($id);
        return $designater->delete();        
    }
}
