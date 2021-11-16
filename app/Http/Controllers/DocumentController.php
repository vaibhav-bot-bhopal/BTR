<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocRequest;
use App\Http\Requests\UpdateDocRequest;
use App\Http\Requests\updateTenderRequest;
use App\Models\Document;
use App\Repository\Document\DocumentInterface;
use Illuminate\Support\Facades\View;

class DocumentController extends Controller
{
    public function docs()
    {
        $docs = Document::orderBy('id', 'desc')->paginate(9);
        return view('docs.docs', compact('docs'));
    }

    protected $document;

    public function __construct(DocumentInterface $document)
    {
        $this->document = $document;
    }

    public function index()
    {
        $documents = $this->document->getAllDocuments();

        // Show Document
        if (View::exists('admin.docs.index')) {
            return view('admin.docs.index', compact('documents'));
        }
    }

    // Add Document in DB
    public function create()
    {
        /// Add Document
        if (View::exists('admin.docs.create')) {
            return view('admin.docs.create');
        } else {
            return view('errors.404');
        }
    }

    public function store(StoreDocRequest $request)
    {
        // Store Document
        $this->document->storeDocument($request->validated());
        return redirect()->route('document.index')->with('success', __('message.docs-success'));
    }

    public function edit($id)
    {
        // Document Edit
        $documents = $this->document->getDocument($id);

        if ($documents) {
            return view('admin.docs.edit', compact('documents'));
        } else {
            return redirect()->route('document.index')->with('error', __('message.docs-error'));
        }
    }

    public function update(UpdateDocRequest $request, $id)
    {
        // Update Document
        $this->document->updateDocument($request->validated(), $id);
        return redirect()->route('document.index')->with('success', __('message.docs-update'));
    }

    public function destroy($id)
    {
        // Delete Document
        $this->document->deleteDocument($id);
        return redirect()->route('document.index')->with('error', __('message.docs-delete'));
    }

    public function download($filename)
    {
        // Download File
        return $this->document->download($filename);
    }

    public function bytesToHuman($bytes)
    {
        // BytesToHuman
        $this->document->bytesToHuman($bytes);
    }
}
