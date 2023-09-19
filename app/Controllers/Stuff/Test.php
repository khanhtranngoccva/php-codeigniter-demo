<?php

namespace App\Controllers\Stuff;
use App\Controllers\BaseController;

class Test extends BaseController {
    public function index(): string {
        return view("test");
    }

    public static function what(): string {
        $data["str"] = "Hello dynamic content!";
        return view("what", $data);
    }
}