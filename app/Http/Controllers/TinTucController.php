<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaitin;
use App\theloai;
use App\tintuc;
class TinTucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = tintuc::all();
        return view('quantri.tintuc.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kq = theloai::select('idTL','TenTL')->get();
        $kq2 = loaitin::select('idLT','Ten')->get();
        return view('quantri.tintuc.create')->with(['kq'=>$kq,'kq2'=>$kq2]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $arr= explode("/",$request->get('Ngay'));
        if (count($arr)==3) 
        $n = $arr[2]."-". $arr[1]."-".$arr[0]; 
        else 
        $n = date("Y-m-d");
        $get_image = $request->file('urlHinh');
        if($get_image){
          $get_name_image = $get_image->getClientOriginalName();
          $get_image->move('upload/images',$get_name_image);
        }
          $tl = new tintuc([
            'TieuDe' => $request->get('TieuDe'),
            'TomTat' => $request->get('TomTat'),
            'Ngay' => $n  ,
            'Content' => $request->get('Content'),
            'idTL' => $request->get('idTL'),
            'idLT' => $request->get('idLT'),
            'Ngay' => date("Y-m-d") ,
            'TinNoiBat' => $request->get('TinNoiBat'),
            'AnHien' => $request->get('AnHien'),
            'lang' => $request->get('lang'),
            'tags' => $request->get('tag'),
            'urlHinh' => 'upload/images/'.$get_name_image,
          ]);
          $tl->save();
          return redirect('/tintuc/create')->with('success','Bài viết đã được lưu'); 
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kq = theloai::select('idTL','TenTL')->get();
        $kq2 = loaitin::select('idLT','Ten')->get();
        $row= tintuc::find($id);

  
        return view('quantri.tintuc.edit',compact('row','kq','kq2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $arr= explode("/",$request->get('Ngay'));
        if (count($arr)==3) 
        $n = $arr[2]."-". $arr[1]."-".$arr[0]; 
        else 
        $n = date("Y-m-d");
        $get_image = $request->file('urlHinh');
        if($get_image){
          $get_name_image = $get_image->getClientOriginalName();
          $get_image->move('upload/images',$get_name_image);
        }
        $tl = tintuc::find($id);
        $tl->TieuDe = $request->TieuDe; 
        $tl->Ngay = $request->n; 
        $tl->Ngay = date("Y-m-d"); 
        $tl->AnHien = $request->AnHien; 
        $tl->lang = $request->lang;
        $tl->tags = $request->tags; 
        $tl->TomTat = $request->TomTat; 
        $tl->Content = $request->Content; 
        $tl->idTL = $request->idTL; 
        $tl->idLT = $request->idLT; 
        $tl->TinNoiBat = $request->TinNoiBat; 
        $tl->urlHinh = 'upload/images/'.$get_name_image; 
        $tl->save();
        return redirect('/tintuc')->with('success','Cập nhập ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tl = tintuc::find($id);
        if( $tl->ykien()->get()->toArray()==null){
            $tl->delete();
        return redirect('/tintuc')->with('success', 'Đã xóa xong');
        }
        return redirect('/tintuc')->with('success', 'không thể xóa khi tin còn');
    }
}
