<?php
$name  = "Shanaine A. Daguinotas";
$today = date("F j, Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello World</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
    <h2>My First Website</h2>
    <nav>
      <a href="#about">About</a>
      <a href="#skills">Skills</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <main>
    <div class="card">
      <h1>Hello, <?php echo $name; ?>!</h1>
      <p>Built with XAMPP, VS Code, and GitHub.</p>
      <p class="date">Today is <?php echo $today; ?></p>
    </div>

    <section id="about" class="card">
      <h2>About</h2>
      <p>This page is running on my local Apache server.</p>
    </section>

    <section id="skills" class="card">
      <h2>Skills</h2>
      <ul>
        <?php
        $skills = ["HTML", "CSS", "PHP", "Git"];
        foreach ($skills as $skill) {
            echo "<li>$skill</li>";
        }
        ?>
      </ul>
    </section>

    <section id="contact" class="card">
      <h2>Contact</h2>
      <p>Email: sdaguinotas20@gmail.com</p>
    </section>
  </main>

  <footer>
    <p>&copy; <?php echo date("Y"); ?> <?php echo $name; ?></p>
  </footer>

</body>
</html>