<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Weidner\Goutte\GoutteFacade as Goutte;

class ScrapingController extends Controller
{
    public function entrance()
    {
        return view('home' , ['data' => '持ってくよ！']);
        //return view('sample') ->with('data','withで持ってくよ！');
    }

    public function add(Request $req)
    {
        //return view('add' , $data);
        return view('add' , ['txt1' => '検索キーワードを入力してください。' , 'txt2' => '複数入力時はスペースで区切って入力してください']);
    }

    public function result(Request $req){

        $key     = $req->keyword;
        $message = $req->message;
        $crawler = Goutte::request('GET', 'https://www.amazon.co.jp/s?k=%E9%81%AE%E5%85%89+%E3%81%AE%E3%82%8C%E3%82%93&crid=31ECKILOZTZJS&sprefix=%2Caps%2C145&ref=nb_sb_ss_recent_1_0_recent');
        //$crawler = Goutte::request('GET', 'https://www.amazon.co.jp/s?k= ""+""');
       //primeとタイムセールの絞り込みできたけどID消しちゃった・・・・・
        
        //dd($crawler);

        //$crawler = Goutte::request('GET', 'https://www.amazon.co.jp/');
/*
        $crawler->filter('div > a')->each(function($node) {
            $href = $node->attr('href');
            $ext = substr($href, -4);
            if ($ext == '.css') {
                echo $href.'<br>';
            }
        });
*/
        //画像とアイテム名取得
        $scraping_result[] = $crawler->filter("img.s-image")->each(function($node) {

            $src = $node->attr("src");
            $alt = $node->attr("alt");

            $image_texts =  [
                'src' => $src,
                'alt' => $alt,
                'url' => '',
            ];

            return $image_texts;         
        });

        //アイテム名
        $item = $crawler->filter("span.a-size-base-plus.a-color-base.a-text-normal")->each(function($node) {
            
            $name_texts = [
                'item_name' => $node->text(),
            ];

            return $name_texts;
        });

        //結果の画像URL取得
        $link_url = $crawler->filter("a.a-link-normal.s-no-outline")->each(function($node) {
            
            $url = $node->attr("href");
            $links = [
                'url' => $url,
            ];

            return $links;
        });
        //dump('URL');
        //dump($scraping_result[0]);

        //resultの件数カウント
        $count = count($scraping_result[0]) -1;
        //dump($count);
        //アイテム名更新
        for($i = 0; $i <= $count; $i++){
            if($scraping_result[0][$i]['alt'] == ""){
                //画像のみは除外する
                //$split = //dump用
                array_splice($scraping_result[0], $i, 1);
                //dump("削除結果");
                //dump($split);
                $count = $count - 1;
            }else{
                //アイテム名とリンクURLを追加/更新する
                $scraping_result[0][$i]['alt'] = $item[$i]['item_name'];
                $scraping_result[0][$i]['url'] = "https://www.amazon.co.jp" . $link_url[$i]['url'];
            }

        }
        //dump('結果');
        //dump($scraping_result);
/*
        //タイムセールのURL
        $crawler = Goutte::request('GET' , 'https://www.amazon.co.jp/gp/goldbox?_encoding=UTF8&pd_rd_w=LShqm&content-id=amzn1.sym.b46abf7d-c5f4-4d9e-89a1-09ee2776bb9d&pf_rd_p=b46abf7d-c5f4-4d9e-89a1-09ee2776bb9d&pf_rd_r=2R6PF9N72Y4CP7VJACGA&pd_rd_wg=AgVVq&pd_rd_r=95615df3-d3b5-4a60-b1ac-470732c461e9&ref_=pd_gw_unk');
        //$crawler->filter("div.GridContainer-module__gridMainContainer_24aSWvAi-VAzH5okoDOqpb")->each(function($node) {


        $crawler->filter("a")->each(function($node) {
/*
$class = $node->attr("class");
            $h=$node->attr("href");
            $t=$node->text();
            $links[] = $h . "\n" . $t . "\n" . $class;
            //dump($links);
            //$links[]=array("href"=>$h,"text"=>$t);
            //dump($links);
            //$texts[] =  $node->text()."\n";
            //dump($texts);
        });

    /*    $crawler = Goutte::request('GET', 'http://b.hatena.ne.jp/hotentry/it');
        $crawler = Goutte::request('GET', 'https://www.amazon.co.jp/');
        dd($crawler);
        $crawler->filter('h3 > a')->each(function($node) {
            $texts[] =  $node->text()."\n";
            dump($texts);
        });
*/
       /*
        $crawler->filter('.result__title .result__a')->each(function ($node) {
           dump($node->text());
        });
        */
        $msg = "こんにちは！\n\n【" . $message . "】と【" . $key . "】 で検索しました。\n\n";

        return view('result',compact('scraping_result','msg'));
    }



    public function contact(Request $req)
    {
        //return view('add' , $data);
        return view('contact' , ['txt1' => '検索キーワードを入力してください。' , 'txt2' => '複数入力時はスペースで区切って入力してください']);
    }
}

