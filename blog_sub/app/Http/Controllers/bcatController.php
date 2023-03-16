<?php

namespace App\Http\Controllers;

use App\Models\blog_category;
use Illuminate\Http\Request;

class bcatController extends Controller
{
    //
    public function category(){

        $b = blog_category::get();
        return view('admin.categories',compact('b'));
    }
    public function category2(Request $r){

        if($r->has('del_id')){
            $d =  blog_category::find($r->del_id);
            $d->delete();
            return back()->with('dmess','Categroy Deleted');
        }
        else{
            blog_category::create([
                'cat_name'=>$r->cat_name
            ]);
            return back()->with('mess','Category Inserted');
        }
       
    }
}
