<?php
namespace App\Http\Controllers;

//require_once './simple_html_dom.php';
require_once $_SERVER['DOCUMENT_ROOT']."/snsAnalysis/app/Http/Controllers/phpQuery-onefile.php";
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;
use Carbon\Carbon;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Tag;

use App\Http\Requests\ArticleRequest;

class EventsController extends Controller {

    public function __construct() {
        $this->middleware('auth:web');
    }

    public function index(Request $request) {

        $query = $_GET;
        $data = [];
        $keyword = $request->input('keyword');
        $ymd = $request->input('ymd');
        $place = $request->input('place');
        $start = $request->input('start');

        $content = http_build_query([]);
        $content_length = strlen($content);
        $options = array('http' => array(
            'method' => 'GET',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                . "Content-Length: $content_length",
            'content' => $content));

        $resultData = file_get_contents(
            'http://api.atnd.org/events/?keyword=' . $keyword.','. $place .'&ymd='.$ymd .'&format=json&count=9&start='.$start,
            false, stream_context_create($options));


        $result = preg_replace('/callback/', '', $resultData);

//        $result = substr($result, 1, strlen($result)-3);
        $result = json_decode($result);

//        dd($result);
        $imgList=[];

        foreach($result->events as $d){

            foreach($d as $dd) {
//                dd($dd);

                $doc = \phpQuery::newDocumentFile($dd->event_url);

                foreach ($doc["#events"]->find("#events-show") as $entry){
                    $h1 = pq($entry)->find('.events-show-img')->html();
                    $data=pq($h1)->attr('data-original');
                    if(!empty($data)){
                        $imgList[]='https://atnd.org'.$data;
                    }else{
                        $imgList[]='https://atnd.org/images/bg/o384.jpg';
                    }
                }
            }
        }


//        $result = preg_replace('/callback/', '', $resultData);
//        $temp = json_decode(substr($result, 1, strlen($result)-3));

        $temp = json_decode($resultData);

        $count = 0;
        foreach($temp->events as $d){

            $d->event->img=$imgList[$count];
            $count++;
        }

        return response()->json($temp);
//        dd($_GET['callback'] . '('.json_encode($temp).')');

////echo $_GET['callback'] . preg_replace('/callback/', '', $temp);
//        echo $_GET['callback'] . '('.json_encode($temp).')';
    }

}