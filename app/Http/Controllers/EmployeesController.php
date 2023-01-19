<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function getAll(Request $request)
    {
        $url = 'https://dummy.restapiexample.com/api/v1/employees';
		$headers = ['Accept: application/json'];
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
		curl_close($ch);

		$response = json_decode($result, true);
   

		return view('employees/getEmployees', ['results' => $response['data']]);
    }

    public function getById(Request $request)
    {
        $url = 'https://dummy.restapiexample.com/api/v1/employee/3';
		$headers = ['Accept: application/json'];
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
		curl_close($ch);

		$response = json_decode($result, true);
        

		return view('employees/getEmployeesById', ['result' => $response['data']]);
    }

    public function create(Request $request)
    {
        $url = 'https://dummy.restapiexample.com/api/v1/create';
		$headers = ['Accept: application/json'];
        $data = [
            "name" => "Fardan",
			"salary" => "1000000",
			"age" => "20"
        ];
		$dataJSON = json_encode($data);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$result = curl_exec($ch);
		curl_close($ch);

		$response = json_decode($result, true);

		return view('employees/postEmployees', ['result' => $response['data']]);
    }

    public function update(Request $request)
    {
        $url = 'https://dummy.restapiexample.com/api/v1/update/3491';
		$headers = ['Accept: application/json'];
        $data = [
            "name" => "Fardan Faturrahman",
			"salary" => "2500000",
			"age" => "21",
            "id" => "3491"
        ];
        $dataquery = http_build_query($data);
		$dataJSON = json_encode($data);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataquery);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
		$result = curl_exec($ch);
		curl_close($ch);

		$response = json_decode($result, true);

		return view('employees/updateEmployees', ['result' => $response['data']]);
    }

    public function delete(Request $request)
    {
        $url = 'https://dummy.restapiexample.com/api/v1/delete/1';
		$headers = ['Accept: application/json'];

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
		$result = curl_exec($ch);
		curl_close($ch);

		$response = json_decode($result, true);

		return view('employees/deleteEmployees', ['result' => $response]);
    }

}
