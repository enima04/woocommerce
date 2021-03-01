<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Automattic\WooCommerce\Client;
use Session;
//ck_ff02f238ff61cb2643fe2ce8c92bb146791682f0
//cs_ef3042502659202cde15613f596b14fc965a170e

class ConnectionController extends Controller
{
    public $woocommerce;

    public function __construct(){
        $this->woocommerce = new Client(
            Session::get('woo_host'),
            Session::get('woo_key'),
            Session::get('woo_secret'),
            [
                'wp_api' => true,
                'version' => 'wc/v3',
            ]
        );
    }

    
}
