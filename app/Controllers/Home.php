<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$global = json_decode(file_get_contents('https://api.kawalcorona.com/positif'),true);
		$api = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia'),true);
		$provinsi=json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'),true);
		$data = [
			'kasus'=>$api,
			'global'=>$global,
			'provinsi'=>$provinsi
		];
		return view('index',$data);
	}

	public function pemetaan_nasional()
	{
		$sebaran = json_decode(file_get_contents('https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json'),true);
		$data = [
			'sebaran'=>$sebaran
		];
		return view('pemetaan_nasional',$data);
	}

	public function video()
	{
		return view('testcam');
	}
}
