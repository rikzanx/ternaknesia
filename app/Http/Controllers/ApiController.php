<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Sales;
use App\Store;
use App\Product;

class ApiController extends Controller
{
    //
    public function index()
    {
        $data = DB::table('sales_detail')
        ->join('sales', 'sales_detail.sales_id', '=', 'sales.id')
        ->join('product', 'sales_detail.product_id', '=', 'product.id')
        ->join('store', 'product.store_id', '=', 'store.id')
        ->join('users', 'sales.users_id', '=', 'users.id')
        ->select(
            'sales.sale_date AS tanggal_pembelian',
            DB::raw('(SELECT users.name FROM users WHERE users.id = (SELECT users_id FROM sales WHERE sales.id = sales_detail.sales_id)) AS nama_pembeli'),
            DB::raw('(SELECT users.name FROM users WHERE users.id = (SELECT users_id FROM store WHERE store.id = product.store_id)) AS nama_penjual'),
            'product.name AS nama_produk',
            'sales_detail.qty AS jumlah',
            'product.price AS harga',
            DB::raw('sales_detail.qty*product.price AS subtotal')
            )
        ->get();
        return response()->json($data);
    }
    
}
