<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Physical_store_channel;
use Carbon\Carbon;
//use Barryvdh\DomPDF\Facade as PDF;
use Excel;
use PDF;

class PhysicalChannelStorage extends Controller
{
    //

    public function physicalStoreView()
    {

        $item = Physical_store_channel::where( 'created_at', '>', Carbon::now()->subDays(7))
        ->get();

        $items = Physical_store_channel::where('date_sold', '>=', date('y-m-d'))->get();
        $seven = Physical_store_channel::where( 'date_sold', '>', Carbon::now()->subDays(7))->get();
        $avg = Physical_store_channel::select('unit_price')->where('created_at', '>', Carbon::now()->subDays(7))->average('unit_price');
        $max_item = Physical_store_channel::all()->max('product_name');

        return view('system.physicalStore')->with('item',$item)->with('avg',$avg)->with('items',count($items))
        ->with('seven',count($seven))->with('max_item',$max_item);
        //print_r($item[1]['id']);
    }
    public function socialMediaView()
    {
        $item = Physical_store_channel::where( 'created_at', '>', Carbon::now()->subDays(7))
        ->get();

        $items = Physical_store_channel::where('date_sold', '>=', date('y-m-d'))->get();
        $seven = Physical_store_channel::where( 'date_sold', '>', Carbon::now()->subDays(7))->get();
        $avg = Physical_store_channel::select('unit_price')->where('created_at', '>', Carbon::now()->subDays(7))->average('unit_price');
        $max_item = Physical_store_channel::all()->max('product_name');

        return view('system.socialMedia')->with('item',$item)->with('avg',$avg)
        ->with('items',count($items))->with('seven',count($seven))->with('max_item',$max_item);
    }
    public function ecommerceView()
    {
        $item = Physical_store_channel::where( 'created_at', '>', Carbon::now()->subDays(7))
        ->get();

        $items = Physical_store_channel::where('date_sold', '>=', date('y-m-d'))->get();
        $seven = Physical_store_channel::where( 'date_sold', '>', Carbon::now()->subDays(7))->get();
        $avg = Physical_store_channel::select('unit_price')->where('created_at', '>', Carbon::now()->subDays(7))->average('unit_price');
        $max_item = Physical_store_channel::all()->max('product_name');

        return view('system.ecommerce')->with('item',$item)->with('avg',$avg)
        ->with('items',count($items))->with('seven',count($seven))->with('max_item',$max_item);
    }

    public function salesLogView()
    {
        $data = Physical_store_channel::all();
        return view('system.salesLog')->with('data',$data);
    }
    public function downloadPdf()
    {
        // echo 'he';
        $data = Physical_store_channel::all();
        $pdf = PDF::loadview('system.salesLog',compact('data'));
        return $pdf->download('saleslog.pdf');

        // view()->share('Sales', $data);
        // $pdf = PDF::loadView('pdf', $data);
        // return $pdf->download('pdf_file.pdf');
    }
    public function downloadExcel()
    {

        // $data = Physical_store_channel::all();
        // $data_array[] = array('Id','Coustomer Name','Adress','Phone','product Id','Product name','Unit Price','Quantity',
        // 'total Price','Date Sold','Payment Type','Status','Created At','Updated At');
        // foreach($data as $da)
        // {
        //     $data_array = ['Id' => $da->id,
        //     'Coustomer Name'=> $da->customer_name,
        //     'Adress'=> $da->address,
        //     'Phone'=> $da->phone,
        //     'product Id'=> $da->product_id,
        //     'Product name'=> $da->product_name,
        //     'Unit Price'=> $da->unit_price,
        //     'Quantity'=> $da->quantity,
        //     'total Price'=> $da->total_price,
        //     'Date Sold'=> $da->date_sold,
        //     'Payment Type'=> $da->payment_type,
        //     'Status'=> $da->status,
        //     'Created At'=> $da->created_at,
        //     'Updated At'=> $da->updated_at];
        // }
        // // Excel::create('Product Data', function($excel) use ($data_array)
        // // {
        // //     $excel->setTitle('Product Data');
        // //     $excel->sheet('Product Data', function($sheet) use ($data_array){
        // //     $sheet->fromArray($data_array, null, 'A1', false, false);
        // //     });
        // // })->downlaod('xlsv');
        // return Excel::download(($data), 'product.xlsx');
        // //print_r($data);

        return Excel::download(new ProductExport, 'product.xlsx');

    }

    public function uploadExcelView()
    {
        return view('system.uploadexcel');
    }
    public function uploadExcel(Request $req)
    {
        Excel::import(new ProductImport, $req->file('import') );

        $req->session()->flash('msg', 'Done');

        return redirect('/system/sales/physical_store/sales_log');
    }
}


