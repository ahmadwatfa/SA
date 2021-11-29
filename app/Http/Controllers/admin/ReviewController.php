<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::get(); 
        return view('admin.pages.review.review_table' , [
            'reviews' => $reviews,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  
        return view('admin.pages.review.add_review');
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
            $image = $request->file('image')->store('review' , 'public');
        }
        $data = array_merge($request->all() , ['image'=> $image]);
        
        $review = Review::create($data);

        return redirect()->route('review.index')->with('success' , 'تم اضافة الرأي بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('admin.pages.review.edit_review' , [
            'review' => $review,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $review = Review::findOrFail($id);
        $image = $review->image;
        
        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('review' , 'public');
            $data = array_merge($request->all() , ['image'=> $image]);
            $review->update($data);
            
        }
        $dat = array_merge($request->all() , ['image'=> $image]);
        $review->update($dat);
        
        return redirect(route('review.index'))->with('update' , 'تم تعديل الرأي بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $work = Review::findOrFail($id);
        $work->delete();

        return redirect()
        ->route('review.index')
        ->with('delete', " تم حذف الرأي بنجاح");
    }
}
