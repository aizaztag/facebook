<?php 
namespace aizaztag\Facebook\Controllers;

use App\Http\Controllers\Controller;

Class AizazController extends Controller{

    public function __construct(){
        //parent::__construct();
    }

    public function index(){
        return view('vendor.aizaz.home');
    } 
}