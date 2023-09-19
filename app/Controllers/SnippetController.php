<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Helpers\Logger;

class SnippetController extends Controller
{
    public function index(): string
    {
        $logger = new Logger("snippet_controller");
        $snippets = model("Snippet")->findAll(10);
        $data["snippets"] = $snippets;
        try {
            return view("snippets", $data);
        } catch (\Throwable $e) {
            $logger->error($e);
            throw $e;
        }
    }

    public function submit()
    {
        $logger = new Logger("snippet_controller");
        $data["name"] = $_POST["name"];
        $data["content"] = $_POST["content"];
        try {
            model('Snippet')->insert($data);
        } catch (\Throwable $exception) {
            $logger->error($exception);
            throw $exception;
        }
        $this->response->redirect("/snippets");
    }
}