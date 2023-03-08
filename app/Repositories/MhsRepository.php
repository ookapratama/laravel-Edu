<?php

namespace App\Repositories;

use App\Repositories\Contract\MhsContract;
use App\Models\Mahasiswa;

class MhsRepository implements MhsContract 
{
   
   public function index() {
      return Mahasiswa::all();
   }

   public function store($data) {
      return Mahasiswa::create($data);
   }

   public function edit($id) {
      return Mahasiswa::find($id);
   }

   public function update($data, $id) {
      $user = Mahasiswa::find($id);
      $user['stb'] = $data['stb'];
      $user['nama'] = $data['nama'];
      $user->save();
   }

   public function destroy($id) {
      $mhs = Mahasiswa::find($id);
      $mhs->delete();
   }



}