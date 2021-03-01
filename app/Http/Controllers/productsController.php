<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ConnectionController;
use Illuminate\Http\Request;
use Storage;

class productsController extends Controller
{
    protected $woocommerce ; 

    public function __construct(){
        $Cnx = new ConnectionController();
        $this->woocommerce = $Cnx->woocommerce;
    }

    // Getting All products
    public function list(){
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $data = [
            'list_products' => $this->woocommerce->get("products", array('per_page' => 100, 'page' => $page)),
        ];
        return view('dashboard.products.list')->with($data);
    }

    // Getting one product
    public function show($id){
        $data = [
            'product' => $this->woocommerce->get("products/".$id),
        ];
        return view('dashboard.products.show')->with($data);
    }

    // Updating Product
    public function update($id){
        $data = [
            'product' => $this->woocommerce->get("products/".$id),
        ];
        return view('dashboard.products.update')->with($data);
    }

    // Modifying Product
    public function modify(Request $request){
        $this->woocommerce->put("products/".$request->id , $request->all());
        return redirect('/dashboard/products');
    }

    // Deleting Product
    public function delete(Request $request){
        $this->woocommerce->delete("products/".$request->id);
        return redirect()->back();
    }

    // Create Product
    public function create(){
        
        $data = [
            'list_categories' => $this->woocommerce->get("products/categories"),
        ];
        return view('dashboard.products.create')->with($data);
    }

    // Add Product
    public function add(Request $request){
        // $array_images = array();
        // foreach($request->pictures as $image){
        //     $filename = Storage::put('public/products',$image);
        //     $img = [
        //         "src" =>  "http://localhost:8000/storage".substr($filename, 6),
        //     ];
        //     array_push($array_images, $img);
        // }
        // $request->merge(["images" => $array_images]);
        $this->woocommerce->post("products",$request->all());
        return redirect('/dashboard/products');
    }
}
