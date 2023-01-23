<?php

namespace App\Http\Controllers\admin;
use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function addCategory(){
        return view('admin.addcategory');
    }

    public function allcategory(){
        $categories= Category::latest()->get();
        return view('admin.allcategory', compact('categories'));
    }
    public function allcategorydata(Request $request){
        $request->validate([
            'categorys_name' => 'required|unique:categories',
            
        ]);
        category::insert([
            'categorys_name' => $request->categorys_name,
           'slug' => strtolower(str_replace('','-',$request->categorys_name))
        ]);
        return redirect()->route('Allcategory')->with('addmessage','Category Add Succesfull');
    }





    public function edite($id){
        $category_info = category:: findOrFail ($id);
        return view('admin.edite',compact('category_info'));
    }
    public function update(Request $request){
        $category_id = $request->category_id;

        $request->validate([
            'category_name' => 'required|unique:categories',
            
        ]);
        category:: findOrFail($category_id)->update ([
            'category_name' => $request->category_name,
           'slug' => strtolower(str_replace('','-',$request->category_name))
        ]);
        return redirect()->route('Allcategory')->with('addmessage','Category Update Succesfull');
    }
        public function delete($id){
            category:: findOrFail ($id)->delete();
            return redirect()->route('Allcategory')->with('addmessage','Category delete Succesfull');
        }
}
