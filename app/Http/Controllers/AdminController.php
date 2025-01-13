<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Container\Attributes\DB;

class AdminController extends Controller
{
    public function add_menu()
    {
        $data = Category::all();
        return view('admin.add_menu', compact('data'));
               
    }

    public function upload_menu(Request $request)
    {
        $data = new Menu;

        $data->title = $request->title;
        $data->category = $request->category;
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
        $category = Category::all();
        return view('admin.update_menu', compact('menu', 'category'));

    }

    public function edit_menu(Request $request, $id)
    {
        $data = Menu::find($id);
        $data-> title = $request->title;
        $data-> category = $request->category;
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

    public function add_category()
    {
        return view('admin.add_category');
    }

    public function upload_category(Request $request)
    {
        $data = new Category;

        $data->name = $request->name;

        $data->save();
        return redirect('view_category');
    }

    public function view_category()
    {
        $data = Category::all();
        return view('admin.view_category', compact('data'));
    }

    public function delete_category($id)
    {
        $data = Category::find($id);
        $data ->delete();

        return redirect()->back();
    }

    public function update_category($id)
    {
        $category = Category::find($id);
        return view('admin.edit_category', compact('category'));
    }

    public function edit_category(Request $request, $id)
    {
        $data = Category::find($id);
        $data-> name = $request->name;      

        $data->save();
        
        return redirect('view_category');
    }

    public function view_transaction()
    {
        $order = Order::all();
        return view('admin.view_transaction', compact('order'));
    }


    // public function update_menu($id)
    // {
    //     return view('admin.update_menu');
    // }

   
}
