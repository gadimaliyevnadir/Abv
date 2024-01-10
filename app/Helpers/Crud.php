<?php

namespace App\Helpers;

use Illuminate\Support\Str;


class Crud
{
    public function  common_image($table_name, $request, $file_name)
    {
        $image1 = $request->file($file_name);
        $fileNameImage1 =Str::uuid()->toString() . '.' . $image1->extension();
        $image1->move(public_path("/uploads/" . $table_name . "/"), $fileNameImage1);
        return  $imageURL1 = "/uploads/" . $table_name . "/" . $fileNameImage1;
    }
}
