<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testride;

class ShowtestridesComtroller extends Controller
{
    public function index()
    {
        $testrides = Testride::all();
        return view('admin.testrides.index')->with('testrides', $testrides);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testrides = Testride::find($id);
        return view('admin.testrides.show')->with('testrides',$testrides);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testrides = Testride::find($id);
        $testrides->delete();
        return redirect('/admin/testrides')->with('success', 'Deleted');
    }

    
}
