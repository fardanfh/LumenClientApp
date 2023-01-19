<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function getRequestJson(Request $request)
    {
        $url = 'http://localhost:8000/public/posts';
		$headers = ['Accept: application/json'];
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
		curl_close($ch);

		$response = json_decode($result, true);
		dd($response);

		return view('posts/getRequestJson', ['results' => $response]);

    }

    public function getRequestXml(Request $request)
	{
		$url = 'http://localhost:8000/public/posts';
		$headers = ['Accept: application/xml'];
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
		curl_close($ch);

		$parsedXml = new \SimpleXMLElement($result);
		$response = [];
		
		foreach($parsedXml->children() as $item) {
			array_push($response, array(
				'id' => $item->id,
				'user_id' => $item->user_id,
				'title' => $item->title,
				'content' => $item->content,
				'status' => $item->status,
				'created_at' => $item->created_at,
				'updated_at' => $item->updated_at,
			));
		}
		
		return view('posts/getRequestXml', ['results' => $response]);

	}

	public function postRequestJson(Request $request)
	{
		$url = 'http://localhost:8000/posts';
		$headers = ['Accept: application/json', 'Content-Type: application/json', 'Authorization: bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXV0aC9sb2dpbiIsImlhdCI6MTY3MzE3MzkzOCwiZXhwIjoxNjczMTc3NTM4LCJuYmYiOjE2NzMxNzM5MzgsImp0aSI6Imo5YzJNdXJCdkFjdHJyU3kiLCJzdWIiOiI1IiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.URjEDaGOraUGLB2ja4v6dsTwzqOuCqFpK1QtxKmwkOU'];
		$datas = array(
			"title" => "req json baru",
			"content" => "req json content baru",
			"status" => "draft",
			"user_id" => "5"
		);
		$dataJSON = json_encode($datas);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataJSON);
		$result = curl_exec($ch);
		curl_close($ch);

		$response = json_decode($result, true);

		return view('posts/postRequestJson', ['result' => $response]);
	}

	public function postRequestXml(Request $request)
	{
		$url = 'http://localhost:8000/posts';
		$headers = ['Accept: application/xml', 'Authorization: bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXV0aC9sb2dpbiIsImlhdCI6MTY3MzE3MzkzOCwiZXhwIjoxNjczMTc3NTM4LCJuYmYiOjE2NzMxNzM5MzgsImp0aSI6Imo5YzJNdXJCdkFjdHJyU3kiLCJzdWIiOiI1IiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.URjEDaGOraUGLB2ja4v6dsTwzqOuCqFpK1QtxKmwkOU'];
		$datas = array(
			"title" => "req xml test",
			"content" => "req xml test",
			"status" => "draft",
			"user_id" => "5"
		);
				
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
		$result = curl_exec($ch);
		curl_close($ch);

		$parsedXml = new \SimpleXMLElement($result);
		$response = [];
		
		foreach($parsedXml->children() as $item) {
			array_push($response, array(
				'id' => $item->id,
				'user_id' => $item->user_id,
				'title' => $item->title,
				'content' => $item->content,
				'status' => $item->status,
				'created_at' => $item->created_at,
				'updated_at' => $item->updated_at,
			));
		}

		return view('posts/postRequestXml', ['result' => $response]);
	}

}
