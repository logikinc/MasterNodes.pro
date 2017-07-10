<?php

namespace App\Http\Controllers;

use App\Blocks;
use Validator, Input, Redirect, View, Auth;
use App\Mnl;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;

class coin extends Controller
{

	public function index()
	{
		$data     = null;
		$coinList = $this->coinList();
		foreach ($coinList as $one) {
			$data['coinList'][$one] = json_decode(Storage::get('' . $one . '.json'), true);
		}
		return view('welcome', $data);
	}

	public function coinList()
	{
		$data[0] = 'ion';
		$data[1] = 'chc';
		$data[2] = 'pivx';
		return $data;
	}

	public function callCoinAPIS()
	{
		$coinList = $this->coinList();
		foreach ($coinList as $one) {
			$this->coinApi($one);
		}
	}

	public function coinApi($name)
	{
		$client  = new Client();
		$res     = $client->request(
			'GET', 'http://' . $name . '.masternodes.pro/api/datapack'
		);
		$content = $res->getBody();
		echo '<pre>' . $content . '</pre>';
		Storage::put('' . $name . '.json', $content);
	}
}