<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function getAll()
    {
        $url = 'http://localhost:8000/public/comments';
		$headers = ['Accept: application/json'];
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
		curl_close($ch);

		$response = json_decode($result, true);

		return view('comments/getAllComments', ['results' => $response]);
    }

}
