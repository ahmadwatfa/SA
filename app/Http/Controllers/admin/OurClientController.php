<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\OurClient;
use Illuminate\Http\Request;

class OurClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = OurClient::get(); 
        return view('admin.pages.our_client.our_client_table' , [
            'clients' => $clients,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.pages.our_client.add_our_client');
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
            $image = $request->file('image')->store('ourclients' , 'public');
        }
        $data = array_merge($request->all() , ['image'=> $image] );
        
        $services = OurClient::create($data);

        return redirect()->route('clients.index')->with('success' , 'تم اضافة الشريك بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\OurClient  $ourClient
     * @return \Illuminate\Http\Response
     */
    public function show(OurClient $ourClient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\OurClient  $ourClient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = OurClient::findOrFail($id);
        return view('admin.pages.our_client.edit_our_client' , [
            'client' => $client,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\OurClient  $ourClient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clients = OurClient::findOrFail($id);
        //Save Image
        if ($request->hasFile('image'))
        {
            $clients->image = $request->file('image')->store('ourclients' , 'public');
        }
        //Update Data
        
        $clients->update();
        
        return redirect(route('clients.index'))->with('update' , 'تم تعديل الشريك بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\OurClient  $ourClient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $about = OurClient::findOrFail($id);
        $about->delete();

        return redirect()
        ->route('clients.index')
        ->with('delete', " تم حذف الشريك ");
    }
}
