<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Product_Type;
class PageController extends Controller
{
	public function getIndex()
	{
		$new_product=Product::where('id_type',1)->paginate(8);
		$sach_kinhte=Product::where('id_type',3)->paginate(8);
		$sach_thieunhi=Product::where('id_type',5)->paginate(8);
		//$loaisach=Product_Type::all()->get();
		//dd($new_product);
		
		return view('page.trangchu',compact('new_product','sach_kinhte','sach_thieunhi'));
	}

	public function getLoaisp($type)
	{
		$sach_theoloai=Product::where('id_type',$type)->paginate(8);
		$ten_loasach=Product_Type::where('id',$type)->get();
		return view('page.loai_sach',compact('sach_theoloai','ten_loasach'));
		
	}

	public function getChitiet_sach(Request $req)
	{
		$sach=Product::where('id',$req->id)->first();
		return view('page.chitiet_sach',compact('sach'));
	}

	public function getGioHang()
	{
		return view('page.giohang');
	}


}
