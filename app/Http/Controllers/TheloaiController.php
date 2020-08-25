<?php

namespace App\Http\Controllers;
use App\theloai;
use App\loaitin;
use Illuminate\Http\Request;
class TheloaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = theloai::all();
        return view('quantri.theloai.index', compact('ds'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quantri.theloai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tl = new theloai([
            'TenTL' => $request->get('TenTL'),
            'ThuTu' => $request->get('ThuTu'),
            'AnHien' => $request->get('AnHien'),
            'HienMenu' => $request->get('HienMenu'),
            'lang' => $request->get('lang'),
        ]);
        $tl->save();
        return redirect('/theloai')->with('success','Thể loại đã được lưu');
    
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
        $row= theloai::find($id);
        return view('quantri.theloai.edit',compact('row'));
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
       $tl = theloai::find($id);
       $tl->tenTL = $request->TenTL; 
       $tl->ThuTu = $request->ThuTu; 
       $tl->AnHien = $request->AnHien; 
       $tl->lang = $request->lang;
       $tl->HienMenu = $request->HienMenu; 
       $tl->save();
       return redirect('/theloai')->with('success','Cập nhập thành công');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tl = theloai::find($id); 
        
        if( $tl->loaitin()->get()->toArray()==null){
            $tl->delete();
        return redirect('/theloai')->with('success', 'Đã xóa xong');
        }
        return redirect('/theloai')->with('success', 'không thể xóa khi loại tin còn');
    }
    
}
