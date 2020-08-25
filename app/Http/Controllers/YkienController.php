<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ykien;
use App\tintuc;
class YkienController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $ds = ykien::all(); // bieets r. cai t chi> ma t k biet na :v v bij gi k biet
         return view('quantri.ykien.index', compact('ds'));
     }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $tl = ykien::find($id);
        $tl->delete();
        return redirect('/ykien')->with('success', 'Đã xóa xong');
      
    
    }
}
