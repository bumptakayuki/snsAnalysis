<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function about() {
        $name = 'Jeffery Way';
        $people = [
            'Taylor Otwell', 'Dayle Rees', 'Eric Barnes'
        ];
        return view('pages.about')->with([
            'name' => $name,
            'people' => $people
        ]);
    }

    public function contact() {
        return view('pages.contact');
    }
}