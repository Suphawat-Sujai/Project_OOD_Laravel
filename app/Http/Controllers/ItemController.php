<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\Item;

class ItemController extends Controller // ไฟล์ทั้งหมดดึกข้อมูลจากหลังบ้านเพื่อไปเเสดงยังหน้าเว้บของเรา
{
    //หน้า main
    public function index() {
        $items = Item::orderBY('id', 'asc')->paginate(10);
        return view('inventory',compact('items'));
    }

    //create resource เพิ่มข้อมูล
    public function create(){
        return view('inventoryadd');
    }

    //store resource
    public function store(Request $request ){
        $request->validate([
            'itemname' => 'required',
            'Quantity' => 'required',
            'Unitprice' => 'required',
            'Totalprice' => 'required',
            'Details' => 'required'
        ]);
        
        $items = new Item;
        $items->Name = $request->itemname;
        $items->Quantity = $request->Quantity;
        $items->Unitprice = $request->Unitprice;
        $items->Totalprice = $request->Totalprice;
        $items->Details = $request->Details;
        $items->save();     

        return redirect()->route('inventory.index')->with('success','Stock has been created successfully.');
    }

    public function edit(Item $item, $id) {

        $data = Item::find($id);

        return view('inventoryedit', compact('data'));
    }

    //update date
    public function update(Request $request, $id){
        $request->validate([
            'itemname' => 'required',
            'Quantity' => 'required',
            'Unitprice' => 'required',
            'Totalprice'=> 'required',
        ]);
        $items = Item::find($id);
        $items->Name = $request->itemname;
        $items->Quantity = $request->Quantity;
        $items->Unitprice = $request->Unitprice;
        $items->Totalprice = $request->Totalprice;
        $items->Details = $request->Details;
        $items->save();
        return redirect()->route('inventory.index')->with('success','Stock has been updated successfully.');
    }

    //delete
    public function destroy(Item $item, $id) {
        $data = Item::find($id)->delete();
        return redirect()->route('inventory.index')->with('success','Stock has been deleted successfully.');
    }

    
    // public function crateorder(){
    //     return view('inventory_purchase');
    // }

    // public function addorder(Request $request ){
    //     $request->validate([
    //         'itemname' => 'required',
    //         'Quantity' => 'required',
    //     ]);
        
    //     $items = new Item;
    //     $items->Name = $request->itemname;
    //     $items->Quantity = $request->Quantity;
    //     $items->save();     

    //     return redirect()->route('inventory.index')->with('success','Stock has been created successfully.');
    // }
}
