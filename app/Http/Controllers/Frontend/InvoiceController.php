<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\StoreInvoice;
use App\Http\Requests\UpdateInvoiceTemplate;
use App\Mail\InvoiceSent;
use App\Models\Company;
use App\Models\Country;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\InvoiceTemplate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Facades\Validator;
use Session;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::where('user_id', auth()->id())
                            ->orderByDesc('id')
                            ->paginate(10);

        return view('frontend.platform.invoices.index', compact('invoices'));
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
    public function store(StoreInvoice $request)
    {
        $user = auth()->user();
        $invoice = Invoice::create([
            'number'                => Invoice::generateInvoiceNumber(),
            'user_id'               => $user->id,
            'company'               => $request->input('company'),
            'sender_phone'          => $request->input('sender_phone'),
            'issue_date'            => $request->input('issue_date'),
            'due_date'              => $request->input('due_date'),
            'sender_name'           => $request->input('sender')['name'],
            'sender_email'          => $request->input('sender')['email'],
            'sender_street'         => $request->input('sender')['street'],
            'sender_city'           => $request->input('sender')['city'],
            'sender_state'          => $request->input('sender')['state'],
            'sender_zip'            => $request->input('sender')['zip'],
            'sender_country'        => $request->input('sender')['country'],
            'receiver_name'         => $request->input('receiver')['name'],
            'receiver_email'        => $request->input('receiver')['email'],
            'receiver_street'       => $request->input('receiver')['street'],
            'receiver_city'         => $request->input('receiver')['city'],
            'receiver_state'        => $request->input('receiver')['state'],
            'receiver_zip'          => $request->input('receiver')['zip'],
            'receiver_country'      => $request->input('receiver')['country'],
            'receiver_phone'        => $request->input('receiver')['phone'],
            'subtotal'              => $request->input('subtotal'),
            'discount'              => $request->input('discount'),
            'tax'                   => $request->input('tax'),
            'total'                 => $request->input('total'),
            'notes'                 => $request->input('notes'),
            'vat'                   => $request->input('vat'),
            'bank_account'          => $request->input('bank_account'),
            'status'                => Invoice::SENT,
            'invoice_template_id'   => $user->company->invoice_id,
            'color'                 => $user->company->invoice_color,
            'slug'                  => \Str::random(60),
        ]);

        if($invoiceItems = $request->input('items')) {
            foreach ($invoiceItems as $item) {
                $invoice->invoice_items()->create([
                    'description' => $item['description'],
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'amount' => $item['amount'],
                ]);
            }
        }

        if($image = $user->company->image) {
            $invoice->image()->create([
                'imageable_id' => $invoice->id,
                'url' => $image->url
            ]);
        }

        Mail::send(new InvoiceSent($invoice));

        Session::flash('success', "Invoice #{$invoice->number} has been successfully sent!");

        return redirect()->route('invoices.index');
    }

    public function storeAsDraft(StoreInvoice $request)
    {
        $user = auth()->user();
        $invoice = Invoice::create([
            'number'                => Invoice::generateInvoiceNumber(),
            'user_id'               => $user->id,
            'company'               => $request->input('company'),
            'sender_phone'          => $request->input('sender_phone'),
            'issue_date'            => $request->input('issue_date'),
            'due_date'              => $request->input('due_date'),
            'sender_name'           => $request->input('sender')['name'],
            'sender_email'          => $request->input('sender')['email'],
            'sender_street'         => $request->input('sender')['street'],
            'sender_city'           => $request->input('sender')['city'],
            'sender_state'          => $request->input('sender')['state'],
            'sender_zip'            => $request->input('sender')['zip'],
            'sender_country'        => $request->input('sender')['country'],
            'receiver_name'         => $request->input('receiver')['name'],
            'receiver_email'        => $request->input('receiver')['email'],
            'receiver_street'       => $request->input('receiver')['street'],
            'receiver_city'         => $request->input('receiver')['city'],
            'receiver_state'        => $request->input('receiver')['state'],
            'receiver_zip'          => $request->input('receiver')['zip'],
            'receiver_country'      => $request->input('receiver')['country'],
            'receiver_phone'        => $request->input('receiver')['phone'],
            'subtotal'              => $request->input('subtotal'),
            'discount'              => $request->input('discount'),
            'tax'                   => $request->input('tax'),
            'total'                 => $request->input('total'),
            'notes'                 => $request->input('notes'),
            'vat'                   => $request->input('vat'),
            'bank_account'          => $request->input('bank_account'),
            'status'                => Invoice::DRAFT,
            'invoice_template_id'   => $user->company->invoice_id,
            'color'                 => $user->company->invoice_color,
            'slug'                  => \Str::random(60),
        ]);

        if($invoiceItems = $request->input('items')) {
            foreach ($invoiceItems as $item) {
                $invoice->invoice_items()->create([
                    'description' => $item['description'],
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'amount' => $item['amount'],
                ]);
            }
        }

        if($image = $user->company->image) {
            $invoice->image()->create([
                'imageable_id' => $invoice->id,
                'url' => $image->url
            ]);
        }

        Session::flash('warning', "Invoice #{$invoice->number} has been saved!");

        return redirect()->route('invoices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($invoice)
    {
        $invoice = Invoice::where([
                    'user_id' => auth()->id(),
                    'slug' => $invoice
                ])->first();

        return view('frontend.platform.invoices.show', compact('invoice'));
    }


    /**
     * @param $slug
     * @param $email
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function view($slug, $email)
    {
        $invoice = Invoice::where([
            'slug' => $slug,
            'receiver_email' => $email
        ])->with(['invoice_items', 'image'])->first();

        if($invoice->status === Invoice::SENT) {
            $invoice->update([
                'status' => Invoice::VIEWED
            ]);
        }

        if($invoice){
            return view('frontend.platform.invoices.view', [
                'invoice' => $invoice,
                'selectedCountries' => Country::restructureCountries()
            ]);
        } else {
            return  back();
        }
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
        $validatedData = $request->validated();
        $company = Company::updateOrCreate(['user_id' => auth()->id()], $validatedData);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = uniqid().'.'.strtolower($file->getClientOriginalExtension());
            $url = 'public/invoice-logos/' . $name;
            $this->deleteLogo($company);

            Image::make($file)
                ->resize(700, 300)
                ->save(storage_path('app/' . $url));

            $company->image()->updateOrCreate(
                ['imageable_id' => $company->id],
                ['url' => $url]
            );
        }

        if($request->has(['delete_logo'])) {
            $this->deleteLogo($company);
            $company->image()->delete();
        }

        return back()->with('success', 'Your invoice has been customized!');
    }

    public function deleteLogo($company)
    {
        if($company->image()->first() && storage_path($company->image()->first()->url)) {
            Storage::delete($company->image()->first()->url);
        }
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
