<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/snippets" method="POST">
    <input name="name" type="text">
    <textarea name="content"></textarea>
</form>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Content</th>
        <th>Created At</th>
        <th>Updated At</th>
    </tr>
    </thead>
    <tbody>
    <?php

    use App\Helpers\Logger;

    $logger = new Logger("snippet_controller");
    /** @var array $snippets */
    foreach ($snippets as $item) {
        $id = $item["id"];
        $name = $item["name"];
        $content = $item["content"];
        $created_at = $item["created_at"];
        $updated_at = $item["updated_at"];
        echo "
                    <tr>
                        <td>$id</td>
                        <td>$name</td>
                        <td>$content</td>
                        <td>$created_at</td>
                        <td>$updated_at</td>                 
                    </tr>
                ";
    }
    ?>
    </tbody>
</table>
</body>
</html>