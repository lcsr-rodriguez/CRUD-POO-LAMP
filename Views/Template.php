<?php namespace Views;

$template = new Template();

class Template
{
    # Constructor and Destructor
    public function __construct(){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student administration</title>
    <link rel="stylesheet" href="<?php echo URL; ?>/Views/template/css/bootstrap.css">
</head>
<body>
<?php
    }

    public function __destruct(){
?>
</body>
</html>

<?php
    }

}

?>