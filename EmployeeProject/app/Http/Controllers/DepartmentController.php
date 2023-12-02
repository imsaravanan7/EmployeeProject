<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\department;

class DepartmentController extends Controller
{
    public $departmenter;
    public function __construct(){
        $this->departmenter=new department();
    }
    public function index()
    {
        return $this->departmenter->all();
    }

    public function store(Request $request)
    {
        return $this->departmenter->create($request->all());
    }

    public function show(string $id)
    {
        return $departmenter=$this->departmenter->find($id);
    }

    public function update(Request $request, string $id)
    {
        $departmenter=$this->departmenter->find($id);
        $departmenter->update($request->all());
        return $departmenter;
    }

    public function destroy(string $id)
    {
        $departmenter=$this->departmenter->find($id);
        return $departmenter->delete();        
    }
}
