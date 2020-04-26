<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\sub_category;
use App\Models\Book;


use Toastr;





class PageController extends Controller
{
    public function home(){
      return view('page.index');
    }

    public function book_subcategory($id){

      $book = book::where('id_subcategory','=',$id)->where('id_status','=','1')->paginate(6);
      $book2 = book::where('id_subcategory','=',$id)->count();

      return view('page.book.list',['book' => $book, 'book2' => $book2]);
    }

    public function book_category(){
      $category = san_pham::paginate(4);
      return view('page.category.list',['category' => $category ]);
    }


    public function book_detail($id){
      $book = book::find($id);
      return view('page.book.detail',['book' => $book]);
    }



   
}
