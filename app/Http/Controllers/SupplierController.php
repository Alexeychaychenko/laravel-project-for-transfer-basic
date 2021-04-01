<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('admin.supplier')->with('suppliers', $suppliers);
    }

    public function save(Request $request)
    {
        $supplier = Supplier::find($request['id']);
        $supplier->name = $request['name'];
        $supplier->save();
        echo "success";
    }

    public function delete(Request $request)
    {
        Supplier::find($request['id'])->delete();
        echo "success";
    }

    public function create(Request $request)
    {
        $supplier = new Supplier;
        $supplier->name = $request['name'];
        $supplier->save();
        
        return view('admin.supplier.ajax_append_supplier')->with('supplier', $supplier);
    }
}
