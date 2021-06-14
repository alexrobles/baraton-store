<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Category;

class CategoriesController extends Controller
{
    public function index() {
        $title = 'Categorias';
        $categories = ['Belleza', 'Niños', 'Dama', 'Caballeros'];
        return view('pruebas.index', array(
            'title' => $title,
            'categories' => $categories
        ));
    }

    public function getCategories(){
        
        $categories = Order::all();
        var_dump($categories);
        
        foreach($categories as $categorie){
            echo "<h1>".$categorie->state."</h1>";
            echo "<h1>".$categorie->user_id."</h1>";
        }
        
        die();
    }
}
