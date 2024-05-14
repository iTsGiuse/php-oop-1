<?php

class Movie {
   public $name;
    public $year;
    public $type;
    public function __construct($_name, $_year, $_type) {
        $this->name = $_name;
        $this->year = $_year;
        $this->type = $_type;
    }

    public function getInfoMovie() {
        return $this->name . ' ' . $this->year. ' ' . $this->type;
    }

}

$lattimofuggente = new Movie("L'attimo fugggente", 1989, "Comedy/Drama");
$patchadams= new Movie("Patch Adams", 1998, "Comedy/Drama");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    <header>
        <h1>MOVIES</h1>
    </header>
    <main>
        <div>
            <h3> <?php echo $lattimofuggente->getInfoMovie();?></h3>
        </div>
        <div>
            <h3><?php echo $patchadams->getInfoMovie(); ?></h3>
        </div>
    </main>
</body>
</html>

<style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    h1, h3 {
        text-align: center;
    }
    main{
        margin-top: 10px;
    }


</style>