<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarouselController extends Controller
{
    public function update(Request $request, $id){
        $this->validate(request(),[
            'input_img' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);
    
        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/');
            $image->move($destinationPath, $name);
        }
        $img_name = '/img/'.$name;
        

        $test = DB::table('carousels')->where('id',$id)->count();
        if(!$test){
            DB::table('carousels')->insert([
                'id' => $id,
                'image' => $img_name
                ]);
        }else{
            DB::table('carousels')
            ->where('id', $id)
            ->update(['image' => $img_name]);
        }
        return redirect('/adminpanel/showcarousel');
    } 
}
