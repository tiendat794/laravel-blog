<?php

namespace App\Providers;
use DB;
use Illuminate\Support\ServiceProvider;
use App\loaitin;
use App\theloai;
use App\tintuc;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $menu = DB::table('theloai')
            ->orderby('ThuTu','asc')
            ->where('AnHien','=','1')
            ->where('lang','=','vi')
            ->limit(3)->get();
            $view ->with('menu',$menu);
        });
        view()->composer('footer',function($view){
            $menu = DB::table('loaitin')
            ->orderby('ThuTu','desc')
            ->where('AnHien','=','1')
            ->where('lang','=','vi')
            ->limit(5)->get();
            $XaHoi = DB::table('tin')
            ->join('loaitin','tin.idLT','loaitin.idLT')
            ->orderby('tin.Ngay','desc')
            ->where('tin.idLT','9')
            ->where('tin.lang','=','vi')
            ->limit(3)
            ->distinct('tin.TieuDe')->get();
            $XemNhieuNhat = DB::table('tin')
            ->join('loaitin','tin.idLT','loaitin.idLT')
            ->orderby('tin.Ngay')
            ->where('tin.lang','=','vi')
            ->limit(5)
            ->distinct('TieuDe')->get();
            $view ->with(['menu'=>$menu,'XaHoi'=>$XaHoi,'XemNhieuNhat'=>$XemNhieuNhat]);
        });
        view()->composer('rightContent.rightContent',function($view){
            $menu = DB::table('loaitin')->orderby('ThuTu','asc')->where('AnHien','=','1')->where('lang','=','vi')->limit(5)->get();
            $view ->with('menu',$menu);
        });
        view()->composer('rightContent.rightContent',function($view){
            
            $dexuat = DB::table('tin')->join('loaitin','tin.idLT','loaitin.idLT')->orderby('tin.Ngay','asc')->limit(3)->where('tin.lang','=','vi')->distinct('TieuDe')->get();
            $ganday = DB::table('tin')->join('loaitin','tin.idLT','loaitin.idLT')->distinct('TieuDe')->orderby('tin.Ngay','desc')->limit(3)->where('tin.lang','=','vi')->get();
            $tags = DB::table('tags')->limit(8)->where('lang','=','vi')->get();
            $view ->with(['dexuat'=>$dexuat,'ganday'=> $ganday,'tags'=>$tags]); 
        });
        view()->composer('quantri.index',function($view){
            
            $theloai = theloai::all();
            $countTheLoai= count($theloai);
            $loaitin = loaitin::all();
            $countLoaiTin= count($loaitin);
            $tintuc = tintuc::all();
            $countTinTuc= count($tintuc);
            $users= DB::table('users')->get();
            $countUser=count($users);
            $view ->with(['countTheLoai'=>$countTheLoai,'countLoaiTin'=> $countLoaiTin,'countTinTuc'=>$countTinTuc,'countUser'=>$countUser]); 
        });
       
    }
}
