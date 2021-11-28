<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\OurWork;
use Illuminate\Http\Request;

class OurWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = OurWork::all(); 
        return view('admin.pages.our_work.our_work_table' , [
            'works' => $works,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.our_work.add_our_work');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('work' , 'public');
        }
        $data = array_merge($request->all() , ['image'=> $image]);

        $works = OurWork::create($data);

    

        return redirect()
        ->route('our-works.index')
        ->with('success', " تم اضافة العمل بنجاح");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\OurWork  $ourWork
     * @return \Illuminate\Http\Response
     */
    public function show(OurWork $ourWork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\OurWork  $ourWork
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work = OurWork::findOrFail($id);
        return view('admin.pages.our_work.edit_our_work', [
            'work' => $work,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\OurWork  $ourWork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $work = OurWork::findOrFail($id);
        
        $image = $work->image;
        
        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('work' , 'public');
            $data = array_merge($request->all() , ['image'=> $image]);
            $work->update($data);
            
        }
        
        $dat = array_merge($request->all() , ['image'=> $image]);
        $work->update($dat);
        
        
       
        

        return redirect()
        ->route('our-works.index')
        ->with('success', "تم تعديل العمل بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\OurWork  $ourWork
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $work = OurWork::findOrFail($id);
        $work->delete();

        return redirect()
        ->route('our-works.index')
        ->with('delete', " تم حذف العمل بنجاح");
    }
}
