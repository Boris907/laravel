<?php
/**
 * Created by PhpStorm.
 * User: ITSCHOOL4
 * Date: 25.01.2017
 * Time: 20:07
 */

namespace App\Http\Controllers;


class ContactsController extends Controller
{
    public function index(){

        $data = [];
        $data['name']= '<span style="color:red;">Bori</span>';
        $data['nickname']= 'Nick';
        return view('pages.contacts')->with($data);
    }

    public function test(){
        return 'test';
    }
}