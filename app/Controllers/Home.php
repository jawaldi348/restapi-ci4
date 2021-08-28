<?php

namespace App\Controllers;

use App\Models\Barang;

class Home extends BaseController
{
	public function index()
	{
		$model = new Barang();
		$data['barang'] = $model->getBarang()->getResultArray();
		return view('view_home', $data);
	}
}
