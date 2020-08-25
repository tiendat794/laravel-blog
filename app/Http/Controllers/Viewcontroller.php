<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Viewcontroller extends Controller
{
    public function index() {
        $TinNoiBat = DB::table('tin')->orderby('Ngay','desc')
        ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
        ->where('tin.AnHien','=','1')
        ->where('tin.lang','=','vi')
        ->Where("TinNoiBat","=","1")
        ->offset(0)
        ->limit(5)
        ->get(); 
        $ganday = DB::table('tin')->join('loaitin','tin.idLT','loaitin.idLT')
        ->where('tin.lang','=','vi')
        ->orderby('tin.Ngay','desc')
        ->limit(3)
        ->get(); 
        $DocNhieuNhat = DB::table('tin')->join('loaitin','tin.idLT','loaitin.idLT')->orderby('tin.SoLanXem','desc')->where('tin.lang','=','vi')->limit(5)->distinct('tin.TieuDe')->get();
        $XemNhieuNhat = DB::table('tin')->join('loaitin','tin.idLT','loaitin.idLT')->orderby('tin.Ngay')->where('tin.lang','=','vi')->limit(5)->distinct('TieuDe')->get();
        $ThienNhien = DB::table('tin')->join('loaitin','tin.idLT','loaitin.idLT')->orderby('tin.Ngay','desc')->where('tin.idTL','20')->where('tin.lang','=','vi')->limit(6)->distinct('tin.TieuDe')->get();
        $PhapLuat1 = DB::table('tin')->join('loaitin','tin.idLT','loaitin.idLT')->orderby('tin.Ngay','desc')->where('tin.idLT','11')->where('tin.lang','=','vi')->distinct('tin.TieuDe')->paginate(3);
        return view('index')->with(['ganday'=>$ganday,'TinNoiBat'=>$TinNoiBat,'DocNhieuNhat'=>$DocNhieuNhat,'XemNhieuNhat'=>$XemNhieuNhat,'ThienNhien'=>$ThienNhien,'PhapLuat1'=>$PhapLuat1]);
    }
    public function tintrongloai($idLT,$pageNum=1){
        $kq =DB::table("tin")->where("idLT",$idLT)->where("AnHien",1)->paginate(6);
        $TenLT= DB::table("loaitin")->where("idLT",$idLT)->value("Ten");
        $idLT = DB::table("loaitin")->where("idLT",$idLT)->value("idLT");
        $TenTL = DB::table("theloai")->where("idTL",$idLT)->value("TenTL");
        $data = ['listtin'=>$kq,'TenLT'=>$TenLT,'TenTL'=>$TenTL,'idLT'=>$idLT];
        return view("tintrongloai",$data);
    }
    public function chitiettin($id){
        $comment =DB::table("tin")->join('ykien', 'tin.idTin', 'ykien.idTin')->orderby('ykien.Ngay','desc')->where("ykien.idTin",$id)->paginate(3);
        $comment1 =DB::table("tin")->join('ykien', 'tin.idTin', 'ykien.idTin')->orderby('ykien.Ngay','desc')->where("ykien.idTin",$id)->get();
        $tin =DB::table("tin")->join('loaitin','tin.idLT','loaitin.idLT')->where("tin.idTin",$id)->where("tin.AnHien",1)->first();
        $id_LT = $tin->idLT;
        $TinLienQuan = DB::table("tin")
        ->join('loaitin','tin.idLT','loaitin.idLT')
        ->where("tin.idLT",$id_LT)->where("tin.AnHien",1)
        ->limit(4)
        ->get();
        $tag =DB::table("tin")->where("idTin",$id)->where("AnHien",1)->value('tags');
        $tags = explode(",",$tag);
        return view('chitiettin',compact('comment','comment1','tin','tags','TinLienQuan')); 
    }
    public function guiykien(Request $request,$idTin,$TieuDe ){
        
        $data['Ngay']=  date("Y-m-d H:i:s");
        $data['HoTen'] = $request->name;
        $data['Email'] = $request->email;
        $data['NoiDung'] = $request->message;
        $data['idTin'] = $idTin;
        DB::table('ykien')->where('idTin',$idTin)->insert($data);
        return Redirect::to('/tin/'.$idTin.'/'.$TieuDe.'.html');

    }
    public function contact(){
        return view('contact');
    }
    public function baocao(){
        return view('baocao ');
    }
    public function timkiem(Request $request){
        $search = $request->s;
        $timkiem1 = DB::table("tin")
        ->join('loaitin','tin.idLT','loaitin.idLT')
        ->Where('tin.TieuDe', 'like', '%' . $search . '%')
        ->orWhere('loaitin.Ten', 'like', '%' . $search . '%')->paginate(10);
        $timkiem = DB::table("tin")
        ->join('loaitin','tin.idLT','loaitin.idLT')
        ->Where('tin.TieuDe', 'like', '%' . $search . '%')
        ->orWhere('loaitin.Ten', 'like', '%' . $search . '%')
        ->get();
        $countSearch = count($timkiem);
        return view('timkiem')->with(['timkiem'=>$timkiem,'timkiem1'=>$timkiem1,'countSearch'=>$countSearch,'search'=>$search]);
    }
}
