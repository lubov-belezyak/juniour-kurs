<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemsController extends Controller
{
    public function addItem(Request $request, Item $item, int $id = 0) {
      if ($item -> where('id', $id) -> count() != 0) {
          $item -> find($id)
                      -> fill($request
                         -> input('item')) -> save();
      } else {
          $item -> create($request -> input('item'));
      }
        return redirect('table');
    }

public function removeItem(Request $request, int $id){
     Item::find($id)->delete();
        return redirect('table');
}

    public function editNewItem(Request $request, Item $item, int $id = 0){
        return view('Items.add', [
            'item' => $item::find($id),]);

    }
}
