<?php

namespace App\Repositories\Contract;

interface MhsContract  {

   public function index();
   public function store($data);
   public function edit($id);
   public function update($data, $id);
   public function destroy($id);

}