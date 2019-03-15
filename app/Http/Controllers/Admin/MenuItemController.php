<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\MenuItemModel;
use Illuminate\Support\Facades\DB;
use App\Model\Admin\MenuModel;
class MenuItemController extends Controller
{
    //
    //
    public function index()
    {
        $items = DB::table('menu_items')->paginate(3);
        $datas = array();
        $datas['menuitems'] = $items;
        $menu = MenuModel::all();
        $datas['menu'] = $menu;
        return view('admin.content.menu.menuitem.index',$datas);
    }

    public function create()
    {
        $datas = array();
        $menu = MenuModel::all();
        $datas['menu'] = $menu;
        $datas['types'] = MenuItemModel::getTypeOfMenuItem();
        return view('admin.content.menu.menuitem.submit',$datas);

    }

    public function edit($id)
    {
        $data = array();
        $item = MenuItemModel::find($id);
        $data['menuitem'] = $item;
        $data['menu'] = MenuModel::all();
        $data['types'] = MenuItemModel::getTypeOfMenuItem();
        return view('admin.content.menu.menuitem.edit',$data);
    }

    public function delete($id)
    {
        $item = MenuItemModel::find($id);
        $item->delete();

        return redirect('/admin/menuitems')->with('thongbao', 'da xoa thanh cong ');
    }

    public function store(Request $request)
    {
        $validation = $request->validate(
            [
                'name'=>'required|max:100',
                'type'=>'required',
                'link'=>'required',
            ],[
                'name.required'=>'please enter name',
                'type.required'=>'please enter name type',
                'link.required'=>'please enter name link'
            ]
        );
        $item = new MenuItemModel();
        $item->name = $request->name;
        $item->type = isset($request->type) ? $request->type : '';
        $item->params = isset($request->params) ? $request->params : '';
        $item->link = isset($request->link) ? $request->link : '';
        $item->desc= $request->desc;
        $item->icon= isset($request->icon) ? $request->icon : '';
        $item->menu_id = isset($request->menu_id) ? $request->menu_id : 0;
        $item->parent_id = isset($request->parent_id) ? $request->parent_id : 0;

        $item->save();

        return redirect('admin/menuitems');

    }

    public function update(Request $request,$id)
    {
        $validation = $request->validate(
            [
                'name'=>'required|max:100',
                'type'=>'required',
                'link'=>'required',
            ],[
                'name.required'=>'please enter name',
                'type.required'=>'please enter name type',
                'link.required'=>'please enter name link'
            ]
        );
        $item = MenuItemModel::find($id);
        $item->name = $request->name;
        $item->type = $request->type;
        $item->params = $request->params;
        $item->link = $request->link;
        $item->desc= $request->desc;
        $item->icon=$request->icon;
        $item->menu_id = $request->menu_id;
        $item->parent_id = isset($request->parent_id) ? $request->parent_id : 0;
        $item->save();

        return redirect('admin/menuitems');
    }

    public function destroy($id)
    {
        $item = MenuItemModel::find($id);
        $item->delete();

        return redirect('/admin/menuitems');
    }
}
