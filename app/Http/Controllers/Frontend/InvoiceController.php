<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\UpdateInvoiceTemplate;
use App\Models\Company;
use App\Models\InvoiceTemplate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.platform.invoices.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.platform.invoices.create');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showTemplates()
    {
        $user = auth()->user();
        $templates = InvoiceTemplate::all();

        return view('frontend.platform.invoices.templates', compact('user','templates'));
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
     * @param UpdateInvoiceTemplate $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function customizeInvoice(UpdateInvoiceTemplate $request)
    {
        $company = Company::updateOrCreate(['user_id' => auth()->id()], $request->validated());

        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = uniqid().'.'.strtolower($file->getClientOriginalExtension());
            $url = 'public/invoice-logos/' . $name;
            if($company->image()->first() && storage_path($company->image()->first()->url)) {
                Storage::delete($company->image()->first()->url);
            }

            Image::make($file)
                ->resize(700, 300)
                ->save(storage_path('app/' . $url));

            $company->image()->updateOrCreate(
                ['imageable_id' => $company->id],
                ['url' => $url]
            );
        }

        return back()->with('invoice-customize', 'Your invoice has been customized!');
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
}
