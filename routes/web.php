<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
//    URL: authen/admin
    Route::get('/','adminController@index')->name('admin.dashboard');
    /*
    url : authen/admin/dashboard
    */
    Route::get('/dashboard','adminController@index')->name('admin.dashboard');
    /*
        url : authen/admin/register
        Route: trả về view đăng kí  tài khoản admin
    */
    Route::get('register','adminController@create')->name('admin.register');
    /*
        url : authen/admin/register
        Trả về phương thức POST
        Route dùng để đăng kí 1 admin
    */
    Route::post('register','adminController@store')->name('admin.register.store');

    /*
     * Route tra về đăng nhập admin
     * Method: Get
     * */
    Route::get('/login','Auth\Admin\LoginController@login')->name('admin.auth.login');
    /*
     * Route: xử lý quá trình đăng nhập admin
     * Method: Post
     * */

    Route::post('/login','Auth\Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');
    /*
     * Route: dùng để đăng xuất
     * url : admin/logout
     * */
    Route::post('/logout','Auth\Admin\LoginController@logout')->name('admin.auth.logout');
});


/*
 * Route cho nhà cung cấp sản phẩm
 */
Route::prefix('seller')->group(function(){
    /*
     * URL: authen/seller*/
    Route::get('/','SellerController@index')->name('seller.dashboard');

    /*
     * URL:  authen/seller/dashboard
     * Route đăng nhập
     */
    Route::get('/dashboard','SellerController@index')->name('seller.dashboard');

    /*
           url : authen/seller/register
           Route: trả về view đăng kí  tài khoản seller
       */
    Route::get('register','SellerController@create')->name('seller.register');
    /*
        url : authen/seller/register
        Trả về phương thức POST
        Route dùng để đăng kí 1 seller
    */
    Route::post('register','SellerController@store')->name('seller.register.store');

    /*
     * Route tra về đăng nhập admin
     * Method: Get
     * */
    Route::get('/login','Auth\Seller\LoginController@login')->name('seller.auth.login');
    /*
     * Route: xử lý quá trình đăng nhập admin
     * Method: Post
     * */

    Route::post('/login','Auth\Seller\LoginController@loginSeller')->name('seller.auth.loginSeller');
    /*
     * Route: dùng để đăng xuất
     * url : admin/logout
     * */
    Route::post('/logout','Auth\Seller\LoginController@logout')->name('seller.auth.logout');

});

/*
 * Route cho nhà cung cấp sản phẩm
 */
Route::prefix('shipper')->group(function(){
    /*
     * URL: authen/seller*/
    Route::get('/','ShipperController@index')->name('shipper.dashboard');

    /*
     * URL:  authen/seller/dashboard
     * Route đăng nhập
     */
    Route::get('/dashboard','ShipperController@index')->name('shipper.dashboard');

    /*
           url : authen/seller/register
           Route: trả về view đăng kí  tài khoản seller
       */
    Route::get('register','ShipperController@create')->name('shipper.register');
    /*
        url : authen/seller/register
        Trả về phương thức POST
        Route dùng để đăng kí 1 seller
    */
    Route::post('register','ShipperController@store')->name('shipper.register.store');

    /*
     * Route tra về đăng nhập admin
     * Method: Get
     * */
    Route::get('/login','Auth\Shipper\LoginController@login')->name('shipper.auth.login');
    /*
     * Route: xử lý quá trình đăng nhập admin
     * Method: Post
     * */

    Route::post('/login','Auth\Shipper\LoginController@loginShipper')->name('shipper.auth.loginShipper');
    /*
     * Route: dùng để đăng xuất
     * url : admin/logout
     * */
    Route::post('/logout','Auth\Shipper\LoginController@logout')->name('shipper.auth.logout');

});