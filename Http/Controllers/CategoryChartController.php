<?php


namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;


class CategoryChartController extends Controller
{
    public function index(){
       $category_count = DB::table('category')
        ->join('products','category.id','=','products.category_id')
        ->select(DB::raw('count(*) as category_count,category.category_name'))
        ->groupBy(DB::raw('category.category_name'))
        ->pluck('category_count','category_name');
        $labels = $category_count->keys();
        $data = $category_count->values();


        return view('category.category_chart',compact('labels','data'));
    }
}