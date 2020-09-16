<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModel;

class ItemController extends Controller
{
    public function index(){
    	$items = ItemModel::get_all();  //Custom
    	// dd($items);
    	return view('item.index', compact('items'));
    }

    public function create(){
    	return view('item.form');
    }

    public function store(Request $req){
        //Custom
    	// dd($req->all());
    	$data = $req->all();
    	unset($data["_token"]);
    	$items = ItemModel::save($data);
    	// dd($items);

        return redirect('/items');
    }

    public function show($id){
        $item = ItemModel::find_by_id($id);
        return view('item.show', compact('item'));
    }

    public function edit($id){
        $item = ItemModel::find_by_id($id);
        return view('item.edit', compact('item'));
    }

    public function update($id, Request $req){
        $item = ItemModel::update($id, $req->all());
        return redirect('/items');
    }

    public function destroy($id){
        $delete = ItemModel::destroy($id);
        return redirect('/items');
    }
}
