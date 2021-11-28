<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Video;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::get();
       
        return view('admin.pages.video.video_table', [
            'videos' => $videos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.video.add_video');
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
        //     'name' => 'required|min:3|max:255|string',
        //     'file'  => 'mimes:mp4,mov,ogg,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv | max:20000',
            
            
        // ],[
        //     'required' => 'هذا الحقل مطلوب',
        //     'string' => 'هذا الحقل يجب ان يحتوي على نص',
        //     'max' => 'هذا الحقل طويل للفاية',
        //     'min' => 'هذا الحقل قصير للغاية',
        //     'file' => 'الرجاء ارفاق فيديو'
        // ]);

        if ($request->hasFile('video'))
        {
            $video = $request->file('video')->store('video' , 'public');
        }
        $data = array_merge($request->all() , ['video'=> $video]);

        $partner = Video::create($data);

    

        return redirect()
        ->route('video.index')
        ->with('success', " تم اضافة الفيديو بنجاح");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $videos = Video::findOrFail($id);
        return view('admin.pages.video.edit_video',[
            'videos' => $videos
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $work = Video::findOrFail($id);
        
        $video = $work->video;
        
        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('video' , 'public');
            $data = array_merge($request->all() , ['video'=> $video]);
            $work->update($data);
            
        }
        
        $dat = array_merge($request->all() , ['video'=> $video]);
        $work->update($dat);
        
        
       
        

        return redirect()
        ->route('video.index')
        ->with('success', "تم تعديل الفيديو بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $video = Video::findOrFail($id);
        $video->delete();

        return redirect()
        ->route('video.index')
        ->with('delete', " تم حذف الفيديو بنجاح");
    }
}
