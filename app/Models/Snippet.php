<?php
namespace App\Models;

use CodeIgniter\Model;

class Snippet extends Model {
    protected $table = "snippets";
    protected $useTimestamps = true;
    protected $allowedFields = array("id", "name", "content", "created_at", "updated_at");
};