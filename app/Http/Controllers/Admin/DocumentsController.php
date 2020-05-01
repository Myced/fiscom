<?php

namespace App\Http\Controllers\Admin;

use App\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocumentsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $documents = Document::all();

        return view('admin.all_documents', compact('documents'));
    }

    public function create()
    {
        return view('admin.create_document');
    }

    public function store(Request $request)
    {
        $document = new Document;
        $document->name = $request->name;
        $document->author = $request->author;
        $document->active = (boolean) $request->status;
        $document->hash = sha1(time());
        $path = $this->upload($request->pdf, Document::PATH);

        $document->pdf_path = $path;

        $document->save();

        session()->flash('success', "Document Uploaded");

        return back();
    }

    public function upload($file, $path)
    {

        $filename = time() . '_' . $file->getClientOriginalName();
        $url = $path . $filename;

        $file->move($path, $filename);


        return $url;
    }

    public function download($hash)
    {
        //find the document
        $document = Document::where('hash', $hash)->first();

        return response()->download($document->pdf_path);
    }

}
