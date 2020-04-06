<?php

namespace App\Http\Controllers;

use App\CyType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CyTypeController extends Controller
{
    public function index()
    {
        $product_types = CyType::all();
        return view('admin.cy_plant.cy_store.cy_type.index', compact('product_types'));
    }

    public function create(Request $request)
    {
        return view('admin.cy_plant.cy_store.cy_type.create');
    }

    public function store(Request $request)
    {
        $product_types = $request->all();
        if($request->hasFile('img')){
            $file_name = $request ->file('img')->store('','public');
            $product_types['img'] = $file_name;
        }
        CyType::create($product_types);
        return redirect('/home/cy_product_type');
    }

    public function edit($id)
    {
        $product_types = CyType::find($id);
        return view('admin.cy_plant.cy_store.cy_type.edit', compact('product_types'));
    }

    public function update(Request $request, $id)
    {
        $request_data = $request->all();
        $item =CyType::find($id);

        // 判斷是否有更新圖片
        if($request->hasFile('img')){
            // 刪除原有圖片
            Storage::disk('public')->delete($item->img);
            // 上傳新的圖片
            $file_name = $request->file('img')->store('','public');
            $request_data['img'] = $file_name;
        }


        $item->update($request_data);
        return redirect('/home/cy_product_type');
    }

    public function destroy($id)
    {
        $item = CyType::find($id);
        $item->delete();
        return redirect('home/cy_product_type');
    }
}
