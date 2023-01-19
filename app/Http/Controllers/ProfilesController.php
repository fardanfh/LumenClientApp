<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function getProfilesbyId()
    {
        $url = 'http://localhost:8000/profiles/1';
		$headers = ['Accept: application/json', 'Authorization: bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXV0aC9sb2dpbiIsImlhdCI6MTY3MTk2NTgxMSwiZXhwIjoxNjcxOTY5NDExLCJuYmYiOjE2NzE5NjU4MTEsImp0aSI6IklOenRMaFJuMHVoZkFvaUoiLCJzdWIiOiI1IiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.T1tJeXlDrAmIzGamZwq0OXo314SCVuwdrsGdXj_1Tuk'];
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
		curl_close($ch);

		$response = json_decode($result, true);

		return view('profiles/profilesById', ['results' => $response]);
    }
}
