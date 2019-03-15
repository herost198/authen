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
    return view('frontend.homepages.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){

    /*
     * --------------- admin Authencation ---------
     */
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
    Route::get('/logout','Auth\Admin\LoginController@logout')->name('admin.auth.logout');


    /*
     * -------------------- Route Admin SHOP-----------
     * ------------------------------------------------
     * ------------------------------------------------
     */
    Route::get('/shop/category','Admin\ShopCategoryController@index');
    Route::get('/shop/category/create','Admin\ShopCategoryController@create');
    Route::get('/shop/category/{id}/edit','Admin\ShopCategoryController@edit');
    Route::get('/shop/category/{id}/delete','Admin\ShopCategoryController@delete');

    Route::post('/shop/category','Admin\ShopCategoryController@store');
    Route::post('/shop/category/{id}','Admin\ShopCategoryController@update');
    Route::post('/shop/category/{id}/delete','Admin\ShopCategoryController@destroy');

        /*
         * -------------------- Route Admin SHOPPING PRODUCT-----------
         * ------------------------------------------------
         * ------------------------------------------------
         */

    Route::get('/shop/product','Admin\ShopProductController@index')->middleware();
    Route::get('/shop/product/create','Admin\ShopProductController@create');
    Route::get('/shop/product/{id}/edit','Admin\ShopProductController@edit');
    Route::get('/shop/product/{id}/delete','Admin\ShopProductController@delete');

    Route::post('/shop/product','Admin\ShopProductController@store');
    Route::post('/shop/product/{id}','Admin\ShopProductController@update');
    Route::post('/shop/product/{id}/delete','Admin\ShopProductController@destroy');

    // danh cho nhà vận chuyển cho SHOP

//
    Route::get('/shop/shipper','Admin\ShipperManagerController@index');
    Route::get('/shop/shipper/create','Admin\ShipperManagerController@create');
    Route::get('/shop/shipper/{id}/edit','Admin\ShipperManagerController@edit');
    Route::get('/shop/shipper/{id}/delete','Admin\ShipperManagerController@delete');

    Route::post('/shop/shipper','Admin\ShipperManagerController@store');
    Route::post('/shop/shipper/{id}','Admin\ShipperManagerController@update');
    Route::post('/shop/shipper/{id}/delete','Admin\ShipperManagerController@destroy');

    // dành cho nhà cung cấp
//

    Route::get('/shop/seller','Admin\SellerManagerController@index');
    Route::get('/shop/seller/create','Admin\SellerManagerController@create');
    Route::get('/shop/seller/{id}/edit','Admin\SellerManagerController@edit');
    Route::get('/shop/seller/{id}/delete','Admin\SellerManagerController@delete');

    Route::post('/shop/seller','Admin\SellerManagerController@store');
    Route::post('/shop/seller/{id}','Admin\SellerManagerController@update');
    Route::post('/shop/seller/{id}/delete','Admin\SellerManagerController@destroy');


    // dành cho khách hàng
//    Route::get('/shop/customer', function(){
//        return view('admin.content.shop.customer.index');
//    });
    Route::get('/shop/customer','Admin\CustomerManagerController@index');
    Route::get('/shop/customer/create','Admin\CustomerManagerController@create');
    Route::get('/shop/customer/{id}/edit','Admin\CustomerManagerController@edit');
    Route::get('/shop/customer/{id}/delete','Admin\CustomerManagerController@delete');

    Route::post('/shop/customer','Admin\CustomerManagerController@store');
    Route::post('/shop/customer/{id}','Admin\CustomerManagerController@update');
    Route::post('/shop/customer/{id}/delete','Admin\CustomerManagerController@destroy');



    Route::get('/shop/order', function(){
        return view('admin.content.shop.order.index');
    });
    // dành cho nhãn hiệu



    Route::get('/shop/brand','Admin\ShopBrandController@index');
    Route::get('/shop/brand/create','Admin\ShopBrandController@create');
    Route::get('/shop/brand/{id}/edit','Admin\ShopBrandController@edit');
    Route::get('/shop/brand/{id}/delete','Admin\ShopBrandController@delete');

    Route::post('/shop/brand','Admin\ShopBrandController@store');
    Route::post('/shop/brand/{id}','Admin\ShopBrandController@update');
    Route::post('/shop/brand/{id}/delete','Admin\ShopBrandController@destroy');


    Route::get('/shop/statistic', function(){
        return view('admin.content.shop.statistic.index');
    });

    /*
    * -------------------- Route Admin Nội Dung-----------
    * ------------------------------------------------
    * ------------------------------------------------
    */


    Route::get('/content/category','Admin\ContentCategoryController@index')->middleware();
    Route::get('/content/category/create','Admin\ContentCategoryController@create');
    Route::get('/content/category/{id}/edit','Admin\ContentCategoryController@edit');
    Route::get('/content/category/{id}/delete','Admin\ContentCategoryController@delete');

    Route::post('/content/category','Admin\ContentCategoryController@store');
    Route::post('/content/category/{id}','Admin\ContentCategoryController@update');
    Route::post('/content/category/{id}/delete','Admin\ContentCategoryController@destroy');


//    Route::get('/content/page', function(){
//        return view('admin.content.content.page.index');
//    });


    Route::get('/content/page','Admin\ContentPageController@index')->middleware();
    Route::get('/content/page/create','Admin\ContentPageController@create');
    Route::get('/content/page/{id}/edit','Admin\ContentPageController@edit');
    Route::get('/content/page/{id}/delete','Admin\ContentPageController@delete');

    Route::post('/content/page','Admin\ContentPageController@store');
    Route::post('/content/page/{id}','Admin\ContentPageController@update');
    Route::post('/content/page/{id}/delete','Admin\ContentPageController@destroy');


    /*
     * Tương tự PAGE và CATEGORY
     * */
    Route::get('/content/post', function(){
        return view('admin.content.content.post.index');
    });
    Route::get('/content/tag', function(){
        return view('admin.content.content.tag.index');
    });

    /*
    * -------------------- Route Administrator User-----------
    * ------------------------------------------------
    * ------------------------------------------------
    */
//    Route::get('/users', function(){
//        return view('admin.content.users.index');
//    });
    Route::get('/users','Admin\AdminManagerController@index');
    Route::get('/users/create','Admin\AdminManagerController@create');
    Route::get('/users/{id}/edit','Admin\AdminManagerController@edit');
    Route::get('/users/{id}/delete','Admin\AdminManagerController@delete');

    Route::post('/users','Admin\AdminManagerController@store');
    Route::post('/users/{id}','Admin\AdminManagerController@update');
    Route::post('/users/{id}/delete','Admin\AdminManagerController@destroy');

    /*
    * -------------------- Route Admin banner-----------
    * ------------------------------------------------
    * ------------------------------------------------
    */

    Route::get('/banner', function(){
        return view('admin.content.banner.index');
    });
    /*
    * -------------------- Route Admin contact-----------
    * ------------------------------------------------
    * ------------------------------------------------
    */

    Route::get('/contact', function(){
        return view('admin.content..contact.index');
    });

    /*
    * -------------------- Route Admin Newletters-----------
    * ------------------------------------------------
    * ------------------------------------------------
    */

    Route::get('/newletters', function(){
        return view('admin.content.newletter.index');
    });
    /*
    * -------------------- Route Admin email-----------
    * ------------------------------------------------
    * ------------------------------------------------
    */

    Route::get('/email/draft', function(){
        return view('admin.content.email.draft.index');
    });
    Route::get('/email/inbox', function(){
        return view('admin.content.email.inbox.index');
    });
    Route::get('/email/send', function(){
        return view('admin.content.email.send.index');
    });

    /*
    * -------------------- Route Admin Global setting-----------
    * ------------------------------------------------
    * ------------------------------------------------
    */


    Route::get('/config','Admin\ConfigController@index');

    Route::post('/config','Admin\ConfigController@store');

    /*
    * -------------------- Route Admin media manager-----------
    * ------------------------------------------------
    * ------------------------------------------------
    */

    Route::get('/media', function(){
        return view('admin.content.media.index');
    });

    /*
    * -------------------- Route Admin menu-----------
    * ------------------------------------------------
    * ------------------------------------------------
    */


    Route::get('/menu','Admin\MenuController@index');
    Route::get('/menu/create','Admin\MenuController@create');
    Route::get('/menu/{id}/edit','Admin\MenuController@edit');
    Route::get('/menu/{id}/delete','Admin\MenuController@delete');

    Route::post('/menu','Admin\MenuController@store');
    Route::post('/menu/{id}','Admin\MenuController@update');
    Route::post('/menu/{id}/delete','Admin\MenuController@destroy');




    Route::get('/menuitems','Admin\MenuItemController@index');
    Route::get('/menuitems/create','Admin\MenuItemController@create');
    Route::get('/menuitems/{id}/edit','Admin\MenuItemController@edit');
    Route::get('/menuitems/{id}/delete','Admin\MenuItemController@delete');

    Route::post('/menuitems','Admin\MenuItemController@store');
    Route::post('/menuitems/{id}','Admin\MenuItemController@update');
    Route::post('/menuitems/{id}/delete','Admin\MenuItemController@destroy');
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