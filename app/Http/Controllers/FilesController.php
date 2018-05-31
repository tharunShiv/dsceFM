<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function index()
    {
        //
        $files = File::orderBy('created_at', 'desc')->paginate(6);
        return view('files')->with('files', $files);
    }

    public function search(Request $request)
    {
        //
       
        $key = $request->input('key');
        $results = File::where('title','LIKE','%'.$key.'%')->orWhere('tags','LIKE','%'.$key.'%')->orWhere('description','LIKE','%'.$key.'%')->orWhere('category','LIKE','%'.$key.'%')->orWhere('fileFormat','LIKE','%'.$key.'%')->orWhere('filename','LIKE','%'.$key.'%')->orderBy('created_at', 'desc')->paginate(3);
        return view('results')->with('results', $results);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title' => 'required', 
            'filename' => 'required',
            'tags' => 'required',
            'filename' => 'required|mimes:jpeg,png,jpg,zip,pdf,docx,doc,rar,pptx,sldx,xlsx,mp4,mp3,flv,avi,csv,txt,text|max:200000',
            'description' => 'nullable'
        ]);

        $file = new File;
        $file->title = $request->input('title');
        $file->category = $request->input('category');
        $file->fileFormat = $request->input('fileFormat');
        $file->tags = $request->input('tags');
        $file->description = $request->input('description');
        $file->access = $request->input('access');
        
        $filenameWithExt = $request->file('filename')->getClientOriginalName();
            // Get just filename
            $filename1 = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('filename')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename1.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('filename')->storeAs('public/files', $fileNameToStore);

        $file->filename =  $fileNameToStore;
        $file->save();
        return redirect('/files')->with('success', 'File Uploaded Successfully!');
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $file = File::find($id);
        return view('show')->with('file', $file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
