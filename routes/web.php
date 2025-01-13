<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\Menu;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

use function Laravel\Prompts\select;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman login admin
Route::get('/admin-login', function () {
    return view('admin-login'); // Pastikan Anda memiliki file view 'admin-login.blade.php'
})->name('admin.login');


//route::get('/home',[HomeController::class,'index']);

route::get('/add_menu',[AdminController::class,'add_menu']);

route::post('/upload_menu',[AdminController::class,'upload_menu']);

route::get('/view_menu',[AdminController::class,'view_menu']);

route::get('/delete_menu/{id}',[AdminController::class,'delete_menu']);

route::get('/update_menu/{id}',[AdminController::class,'update_menu']);

route::post('/edit_menu/{id}',[AdminController::class,'edit_menu']);

route::get('/add_category',[AdminController::class,'add_category']);

route::post('/upload_category',[AdminController::class,'upload_category']);

route::get('/view_category',[AdminController::class,'view_category']);

route::get('/delete_category/{id}',[AdminController::class,'delete_category']);

route::get('/update_category/{id}',[AdminController::class,'update_category']);

route::post('/edit_category/{id}',[AdminController::class,'edit_category']);

route::get('/view_transaction',[AdminController::class,'view_transaction']);

route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', function () {
        $data = Menu::all();
        return view('home',   ['title' => 'Home', 'data'=>$data], ['name' => 'Home']);
    })->name('home');
    Route::get('/kuliner/{cate}', function ($cate) {
        $search = request('search');
        $message = null;
        if ($search == null) {
            
            if ($cate != 'all') {
            $data = DB::table('menus')
            ->where('category', '=',$cate )
            ->get();
            }  else 
            $data = Menu::all();
        
            
        } else {
        $data = DB::table('menus')
            ->where('title', 'like', '%'  .  $search . '%')
            ->get();

            if ($data->isEmpty()) {
                $message = "Menu dengan nama \"$search\" tidak tersedia.";
            }
        }
        
        $category = Category::all(); 
        return view('kuliner', ['title' => 'Kuliner', 'data'=>$data, 'category'=>$category, 'message'=>$message], );
    })->name('kuliner');
    Route::get('/about', function () {      
        return view('about', ['title' => 'About'], ['name' => 'About']);
    })->name('about');

    Route::get('/detail/{id}', function ($id) {  
        
        if ($id > 0) {
            $data = DB::table('menus')
            ->where('id', '=',$id )
            ->get();
        }
        return view('detail', ['title' => 'Detail', 'data'=>$data, 'name' => 'Detail']);
    })->name('detail');

    Route::get('/order/{id}', function ($id) {  
        $order = new Order;
        $menus = DB::table('menus')
            ->where('id', '=',$id )
            ->get();

        foreach ($menus as $menu) {
        //ambil data dari array $menus
         }

         //menghilangkan titik(.) dari harga
         $harga = str_replace('.', '', $menu->harga);

        $order->name = Auth::user()->name;
        $order->address = Auth::user()->address;
        $order->phone = Auth::user()->phone;
        $order->total_price = $harga;
        $order->status="Paid";

        $order->save();

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                  'order_id' => $order->id,
                'gross_amount' => $harga,
            ),
            'customer_details' => array(
                'first_name' => $order->name,
                'phone' => $order->phone,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('order', ['title' => 'Checkout',  'snapToken'=>$snapToken, 'order'=>$order,'data'=>$menus, 'user' => Auth::user()], ['name' => 'Checkout']);
    })->name('order');


    Route::middleware('auth')->group(function () {
        Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');
        Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::get('/profile/delete', [ProfileController::class, 'confirmDelete'])->name('profile.delete.confirm');
        Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.delete');
    });

});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); // Redirect ke halaman utama atau halaman lain sesuai kebutuhan
})->name('logout');
