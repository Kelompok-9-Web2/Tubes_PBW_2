<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class AdminController extends Controller
{
    public function add_menu()
    {
        return view('admin.add_menu');
    }

    public function upload_menu(Request $request)
    {
        $data = new Menu;

        $data->title = $request->title;
        $data->detail = $request->detail;
        $data->harga = $request->harga;
        $image = $request->img;
        $filename = time().'.'.$image->getClientOriginalExtension();
        $request->img->move('menu_img',$filename);

        $data->image = $filename;

        $data->save();
        return redirect('view_menu');
    }

    public function view_menu()
    {
        $data = Menu::all();
        return view('admin.show_menu', compact('data'));
    }

    public function delete_menu($id)
    {
        $data = Menu::find($id);
        $data ->delete();

        return redirect()->back();
    }

    public function update_menu($id)
    {
        $menu = Menu::find($id);
        return view('admin.update_menu', compact('menu'));
    }

    public function edit_menu(Request $request, $id)
    {
        $data = Menu::find($id);
        $data-> title = $request->title;
        $data-> detail = $request->detail;
        $data-> harga = $request->harga;
        $image = $request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('menu_img', $imagename);

            $data->image = $imagename;
        }
       

        $data->save();
        
        return redirect('view_menu');
    }


    // public function update_menu($id)
    // {
    //     return view('admin.update_menu');
    // }

   
}
