<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\product;
use Validator,Redirect,Response;
use DB;
class FrontendController extends Controller
{
    public function home(){
        $a = categories::all();
        return view('frontend.master',compact('a'));
    }
    public function product($id){
        $d=product::find($id);
        $d1=DB::table('products')->where('category','=',$id)->get();
         if($d1){
        return view('frontend.categories',compact('d1','d'));}
    }
    public function delete($id)
    {
       $res=product::where('id',$id)->delete();

       if ($res) {
          return Redirect::back()->with('message','dish sucessfully deleted');
       }
    }
    public function edit($id)
    {
        $data = product::find($id);
        return view('frontend.edit',compact('data'));
    }

    public function update(Request $a)
    {
       // echo "<pre>";
        // print_r($a->all()); // hasFile check karta hai ki image ai hai ya ni
        if ($a->hasFile('image')) {
            $file = $a->file('image');
        // dd($file);//dump and die
        // exit;
        $filename = 'image'. time().'.'.$a->image->extension();
            // dd($filename);
            // exit;
         $file->move("upload/",$filename);
         //dd($file);
         //exit;
         $data = product::find($a->id);
         $data->dish_name = $a->dish_name;
         $data->image = $filename;
         $data->dish_description = $a->dish_description;
    
         $data->save();
         if ($data) {
             return Redirect::back()->with('message','dish sucessfully edited');
         }
        }
        else{
            $data = product::find($a->id);
            $data->dish_name = $a->dish_name;
             $data->dish_description = $a->dish_description;
             $data->save();
              if ($data) {
             return Redirect::back()->with('message','dish sucessfully edited');
         }
        }
    }

    public function deletecat($id)
    {
       $res=categories::where('id',$id)->delete();

       if ($res) {
          return Redirect::back()->with('message','category sucessfully deleted');
       }
    }

    public function editcat($id)
    {
        $data = categories::find($id);
        return view('frontend.editcat',compact('data'));
    }

    public function updatecat(Request $a)
    {
       // echo "<pre>";
        // print_r($a->all()); // hasFile check karta hai ki image ai hai ya ni
        if ($a->hasFile('image')) {
            $file = $a->file('image');
        // dd($file);//dump and die
        // exit;
        $filename = 'image'. time().'.'.$a->image->extension();
            // dd($filename);
            // exit;
         $file->move("upload/",$filename);
         //dd($file);
         //exit;
         $data = categories::find($a->id);
         $data->title = $a->title;
         $data->image = $filename;
    
         $data->save();
         if ($data) {
             return Redirect::back()->with('message','dish sucessfully edited');
         }
        }
        else{
            $data = categories::find($a->id);
            $data->title = $a->title;
             $data->save();
              if ($data) {
             return Redirect::back()->with('message','category sucessfully edited');
         }
        }
    }
}
