<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaitin;
use App\theloai;
class loaitinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = loaitin::all();
        return view('quantri.loaitin.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kq = theloai::select('idTL','TenTL')->get();
        return view('quantri.loaitin.create')->with('kq',$kq);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lt = new loaitin([
            'Ten' => $request->get('Ten'),
            'ThuTu' => $request->get('ThuTu'),
            'AnHien' => $request->get('AnHien'),
            'HienMenu' => $request->get('HienMenu'),
            'lang' => $request->get('lang'),
            'idTL' => $request->get('idTL'),
        ]);
        $lt->save();
        return redirect('/loaitin')->with('success','Loại tin đã được lưu');
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
        $row= loaitin::find($id);
        return view('quantri.loaitin.edit',compact('row','kq'));
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
        $lt = loaitin::find($id);
       $lt->Ten = $request->ten; 
       $lt->ThuTu = $request->ThuTu; 
       $lt->AnHien = $request->AnHien; 
       $lt->lang = $request->lang;
       $lt->idTL = $request->idTL;
       $lt->save();
       return redirect('/loaitin')->with('success','Cập nhập thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        
        
        $tl = loaitin::find($id);
        if( $tl->tintuc()->get()->toArray()==null){
            $tl->delete();
        return redirect('/loaitin')->with('success', 'Đã xóa xong');
        }
        return redirect('/loaitin')->with('success', 'không thể xóa khi tin còn');
    }
}
