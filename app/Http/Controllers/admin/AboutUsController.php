<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = AboutUs::all(); 
        return view('admin.pages.about.about_table' , [
            'abouts' => $abouts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.about.add_about');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'description' => 'required|min:20|max:9000|string',
        //     'image' => 'required|image',
        // ],[
        //     'required' => 'هذا الحقل مطلوب',
        //     'string' => 'هذا الحقل يجب ان يحتوي على نص',
        //     'max' => 'هذا الحقل طويل للفاية',
        //     'min' => 'هذا الحقل قصير للغاية',
        //     'image' => 'الرجاء ارفاق صورة',
        // ]);
        
        $published = AboutUs::get();
        foreach($published as $publish){
            $publish->is_publish = 0 ;
            $publish->save();
        }

        // $about = new About();
        // $about->description = $request->post('description');
        // $about->save();
        
        $user = Auth::user()->name;
        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('aboutus' , 'public');
        }
        $data = array_merge($request->all() , ['image'=> $image] , ['user' => $user]);
        
        $about = AboutUs::create($data);

        return redirect()->route('aboutus.index')->with('success' , 'تم اضافة النبذة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $about = AboutUs::findOrFail($id);
        $published = AboutUs::get();
        foreach($published as $publish){
            $publish->is_publish = 0 ;
            $publish->save();
        }

        $about->is_publish = !$about->is_publish;
        $about->save();

        return redirect(route('aboutus.index'))->with('about',$about);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = AboutUs::findOrFail($id);
        return view('admin.pages.about.edit_about' , [
            'about' => $about ,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user()->name;
         //Reset all
         foreach(AboutUs::get() as $publish){
            $publish->is_publish = 0 ;
            $publish->update();
        }
        //Get About
        $about = AboutUs::findOrFail($id);
        $image = $about->image;
        
        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('review' , 'public');
            $data = array_merge($request->all() , ['image'=> $image] , ['user' => $user]);
            $about->update($data);
            
        }
        $dat = array_merge($request->all() , ['image'=> $image] , ['user' => $user] , ['is_publish' => '1']);
        $about->update($dat);
        
        return redirect(route('aboutus.index'))->with('update' , 'تم تعديل النبذة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $about = AboutUs::findOrFail($id);
        $about->delete();

        return redirect()
        ->route('aboutus.index')
        ->with('delete', " تم حذف النبذة ");
    }
}
