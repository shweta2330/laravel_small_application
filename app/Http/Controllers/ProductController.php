<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;
use Mail;


class ProductController extends Controller
{
   
    public function index()
    {
        return view('product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $image = $request->file('image');
        $validatedData = $request->validate([
            'name'=> 'required',
            'price'=> 'required',
            'image' => 'required|mimes:jpg,pdf,xlx,csv|max:2048',
        ]);
  
        $fileName = time().'.'.$image->extension();  
        //print_r($fileName);die;
   
        $image->move(public_path('uploads'), $fileName);
        $validatedData['image'] = $fileName;
        Product::create($validatedData);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        
        $data['prodcutData'] = Product::paginate(2);

       
        return view('product_able',$data);
    }


    public function contacsubmit(Request $request) {
       
        $data =['ss'];
        $to ="shwetajaiswal7512@gmail.com";
        $title = "test";
        Mail::send('emails.contact_us_email', $data, function($message) use($to,$title)
        {
               $message->to('shwetajaiswal7512@gmal.com', $title)->subject('Thankyou For contact with Happy Clips');
        });
 
    }
    public function exportExcelCSV() {
        return Excel::download(new ProductExport, 'products.csv');
    }
    
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function contact()
    {
        return view('contact_us');
    }

    
}
