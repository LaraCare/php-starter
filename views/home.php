

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= env('APP_NAME', 'MyApp') . ' | ' . $title ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1><?= ($title) ?></h1>
    <p>This is a custom project starter in pure PHP.</p>

    <?php
        if($users){
            echo "<div>";
            foreach ($users as $user) {
                echo "  <div style='margin-top:8px;'>
                            <div>
                                <span>#{$user['id']}</span>
                            </div> 
                            <div>
                                <span>Name: {$user['name']}</span>
                            </div>  
                            <div>
                                <span>E-mail: {$user['email']}</span>
                            </div>
                        </div>";
            }
            echo "</div>";
        }
    ?>
    <span><?= ($message) ?></span>
</body>
</html>
