<?php

namespace App\Models;

use CodeIgniter\Model;

class Barang extends Model
{
	public function getBarang()
	{
		$result = $this->db->table('barang');
		return $result->get();
	}
}
