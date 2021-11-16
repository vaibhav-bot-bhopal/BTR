<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTenderRequest;
use App\Http\Requests\updateTenderRequest;
use App\Models\Tender;
use App\Repository\Tender\TenderInterface;
use Illuminate\Support\Facades\View;

class TenderController extends Controller
{
    public function tenders()
    {
        $tenders = Tender::orderBy('id', 'desc')->paginate(9);
        return view('tender.tender', compact('tenders'));
    }

    //Manage Tender by Admin Panel
    protected $tender;

    public function __construct(TenderInterface $tender)
    {
        $this->tender = $tender;
    }

    public function index()
    {
        $tenders = $this->tender->getAllTenders();

        // Show Tender
        if (View::exists('admin.tender.index')) {
            return view('admin.tender.index', compact('tenders'));
        }
    }

    // Add Tender in DB
    public function create()
    {
        // Add Tender
        if (View::exists('admin.tender.create')) {
            return view('admin.tender.create');
        } else {
            return view('errors.404');
        }
    }

    public function store(StoreTenderRequest $request)
    {
        // Store Tender
        $this->tender->storeTender($request->validated());
        return redirect()->route('tender.index')->with('success', __('message.tender-success'));
    }

    public function edit($id)
    {
        // Tender Edit
        $tenders = $this->tender->getTender($id);

        if ($tenders) {
            return view('admin.tender.edit', compact('tenders'));
        } else {
            return redirect()->route('tender.index')->with('error', __('message.tender-error'));
        }
    }

    public function update(updateTenderRequest $request, $id)
    {
        // Update Tender
        $this->tender->updateTender($request->validated(), $id);
        return redirect()->route('tender.index')->with('success', __('message.tender-update'));
    }

    public function destroy($id)
    {
        // Delete Tender
        $this->tender->deleteTender($id);
        return redirect()->route('tender.index')->with('error', __('message.tender-delete'));
    }

    public function download($filename)
    {
        // Download File
        return $this->tender->download($filename);
    }

    public function bytesToHuman($bytes)
    {
        // BytesToHuman
        $this->tender->bytesToHuman($bytes);
    }
}
