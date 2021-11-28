<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\OurServices;
use Illuminate\Http\Request;

class OurServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = OurServices::all(); 
        return view('admin.pages.services.services_table' , [
            'services' => $services,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.services.add_services');
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
            $image = $request->file('image')->store('services' , 'public');
        }
        $data = array_merge($request->all() , ['image'=> $image] );
        
        $services = OurServices::create($data);

        return redirect()->route('services.index')->with('success' , 'تم اضافة الخدمة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\OurServices  $ourServices
     * @return \Illuminate\Http\Response
     */
    public function show(OurServices $ourServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\OurServices  $ourServices
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = OurServices::findOrFail($id);
        return view('admin.pages.services.edit_services' , [
            'services' => $services,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\OurServices  $ourServices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate 
        // $request->validate([
        //     'description' => 'min:3|max:5000|string',
        //     'image' => 'image'
        // ],[
        //     'required' => 'هذا الحقل مطلوب',
        //     'string' => 'هذا الحقل يجب ان يحتوي على نص',
        //     'max' => 'هذا الحقل طويل للفاية',
        //     'min' => 'هذا الحقل قصير للغاية',
        //     'image' => 'الرجاء ارفاق صورة'
        // ]);

        //Get About
        $services = OurServices::findOrFail($id);
        //Save Image
        if ($request->hasFile('image'))
        {
            $services->image = $request->file('image')->store('services' , 'public');
        }
        //Update Data
        
        $services->update();
        
        return redirect(route('services.index'))->with('update' , 'تم تعديل الخدمة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\OurServices  $ourServices
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $about = OurServices::findOrFail($id);
        $about->delete();

        return redirect()
        ->route('services.index')
        ->with('delete', " تم حذف الخدمة ");
    }
}
