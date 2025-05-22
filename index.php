<?php
// Single-line comment: Define personal info variables
$name = "Veneracion";
$age = 21;
$intro = "I am a student learning PHP.";
$hobby = "VOLLYBALL";
$height = 6.2; // float
$isStudent = true; // boolean

/*
 Multi-line comment:
 Demonstrating PHP variables,
 case sensitivity, and output.
*/

// Note: $Name and $name are different
$Name = "Different Variable";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio - <?php echo $name; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Welcome to <?php echo $name; ?>'s Portfolio</h1>
        <p><?php echo $intro; ?></p>
    </header>

    <main>
        <section>
            <h2>About Me</h2>
            <p>My name is <?php echo $name . ", and I am " . $age . " years old."; ?></p>
            <p>Height: <?php echo $height . " ft"; ?></p>
            <p>Am I a student? <?php echo $isStudent ? "Yes" : "No"; ?></p>
        </section>

        <section>
            <h2>Hobbies</h2>
            <p>I enjoy <?php echo $hobby; ?> and exploring new technology.</p>
        </section>

        <section>
            <h2>Favorites</h2>
            <ul>
                <li>Favorite Color: <span id="favColor"></span></li>
                <li>Favorite Food: Pizza</li>
                <li>Favorite Quote: "<?php echo "Keep learning, keep growing."; ?>"</li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo $name; ?>. All rights reserved.</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
