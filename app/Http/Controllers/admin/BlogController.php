<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.pages.blog.blog_table' , [
            'blogs' => $blogs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.blog.add_blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_ar' =>  'required|max:900|string',
            'title_en' => 'required|max:900|string',
            'discription_ar' => 'required|string|max:5000',
            'discription_en' => 'required|string|max:5000',
            'image' => 'required|image|max:1999',
        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'image' => 'الرجاء ارفاق صورة'
        ]);



       $blog = new Blog();
       $blog->title_ar = $request->title_ar;
       $blog->title_en = $request->title_en;
       $blog->discription_ar = $request->discription_ar;
       $blog->discription_en = $request->discription_en;

    if($request->file('image')){
        $file = $request->file('image');
        $filename = date('Ymdhi').$file->getClientOriginalName();
        $file->move(public_path('upload/blog_image'),$filename);
        $blog['image'] = $filename;
       }

       $blog->save();

       return redirect('admin/blog')

       ->with('success', " تم اضافة المدونة ");



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.pages.blog.edit_bloge' , [
            'blog' => $blog,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        $request->validate([
            'title_ar' =>  'required|max:900|string',
            'title_en' => 'required|max:900|string',
            'discription_ar' => 'required|string|max:9000',
            'discription_en' => 'required|string|max:9000',
            'image' => 'image|max:1999',
        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'image' => 'الرجاء ارفاق صورة'
        ]);


        $blog->title_ar = $request->title_ar;
        $blog->title_en = $request->title_en;
        $blog->discription_ar = $request->discription_ar;
        $blog->discription_en = $request->discription_en;
        if($request->file('image')){
            $file = $request ->file('image');
            $filename = date('Ymdhi').$file->getClientOriginalName();
            $file->move(public_path('upload/blog_image'),$filename);
            $blog['image'] = $filename;
           }
           $blog->save();

           return redirect('admin/blog')->with('success', "تم تعديل المدونة بنجاح");;


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect('admin/blog')->with('delete' , "  تم حذف المدونة من القائمة بنجاح"); ;
    }
}
