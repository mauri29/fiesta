<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Product;

use App\Models\User;
use App\Models\Pais;
use PDF;

class PDFController extends Controller
{
	public function pdf()
    {
    	$product = Product::all();
    	$pdf = PDF::loadView('pdf',['product' => $product]);
    	return $pdf->download('products.pdf');
    }


    /*
	public function index()
	{
		return view("pdf.listado_reportes");
	}

    public function crearPDF($datos,$vistaurl,$tipo)
    {
        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
    }


    public function crear_reporte_porpais($tipo){

     	$vistaurl="pdf.reporte_por_pais";
    	$paises=Pais::all();
     
	    return $this->crearPDF($paises, $vistaurl,$tipo);
    }*/
}
