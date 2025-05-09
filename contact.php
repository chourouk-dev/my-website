<?php
$formSent = false;
$outputMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = htmlspecialchars($_POST["name"]);
    $email    = htmlspecialchars($_POST["email"]);
    $produits = htmlspecialchars($_POST["produits"]);
    $subject  = htmlspecialchars($_POST["subject"]);
    $message  = htmlspecialchars($_POST["message"]);

    $formSent = true;

    $outputMessage = "<div class='confirmation'>
        <h2>Merci pour votre message !</h2>
        <p><strong>Nom :</strong> $name</p>
        <p><strong>Email :</strong> $email</p>
        <p><strong>Produit :</strong> $produits</p>
        <p><strong>Sujet :</strong> $subject</p>
        <p><strong>Message :</strong><br>$message</p>
    </div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact - For the Love of Fancy</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Georgia', serif;
      background: #fdfdfd;
      color: #333;
      line-height: 1.6;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      border-bottom: 1px solid #eee;
      background-color: #fff;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
    }

    .logo span {
      display: block;
      font-family: 'cursive';
      font-size: 18px;
      color: #c5a893;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 25px;
      padding: 0;
    }

    nav li {
      display: inline-block;
    }

    nav a {
      text-decoration: none;
      color: black;
      font-size: 14px;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #c5a893;
    }

    .contact {
      background: #f9f4f4;
      padding: 60px 40px;
      text-align: center;
    }

    .contact h2 {
      text-transform: lowercase;
      font-size: 32px;
      margin-bottom: 10px;
      position: relative;
      display: inline-block;
    }

    .contact h2::after {
      content: "";
      display: block;
      width: 50px;
      height: 4px;
      background: black;
      margin: 10px auto 0;
    }

    .contact .intro {
      font-size: 18px;
      margin: 20px 0 10px;
    }

    .contact .email {
      font-size: 14px;
      margin-bottom: 30px;
      color: #777;
    }

    .contact-form {
      max-width: 800px;
      margin: 0 auto;
    }

    .form-row {
      display: flex;
      gap: 20px;
      margin-bottom: 15px;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      border: none;
      border-bottom: 1px solid #aaa;
      background: transparent;
      transition: border-color 0.3s;
    }

    input:focus, textarea:focus {
      outline: none;
      border-color: #c5a893;
    }

    textarea {
      height: 100px;
      margin-bottom: 20px;
      resize: vertical;
    }

    button {
      background: black;
      color: white;
      padding: 10px 30px;
      border: none;
      cursor: pointer;
      letter-spacing: 1px;
      transition: background 0.3s, transform 0.2s;
    }

    button:hover {
      background: #333;
      transform: scale(1.03);
    }

    .confirmation {
      background-color: #fff0e6;
      padding: 20px;
      margin-top: 30px;
      border: 1px solid #c5a893;
      border-radius: 8px;
      text-align: left;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
    }

    .confirmation h2 {
      color: #333;
      margin-bottom: 10px;
    }

    .confirmation p {
      margin-bottom: 8px;
    }

    .newsletter {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 50px 20px;
      background: white;
      flex-wrap: wrap;
    }

    .newsletter .left, .newsletter .right {
      text-align: center;
      margin: 20px;
    }

    .newsletter h3 {
      margin-bottom: 10px;
    }

    .newsletter input {
      padding: 10px;
      margin-top: 10px;
      border: 1px solid #ccc;
      width: 200px;
    }

    .newsletter button {
      padding: 10px 20px;
      margin-left: 10px;
    }

    .newsletter img {
      width: 120px;
      height: auto;
      border: 2px solid #c5a893;
      border-radius: 10px;
      transition: transform 0.3s;
    }

    .newsletter img:hover {
      transform: rotate(-2deg) scale(1.05);
    }

    footer {
      background: black;
      color: white;
      padding: 30px 20px;
      text-align: center;
    }

    .socials span {
      display: block;
      margin-bottom: 10px;
      font-size: 14px;
      letter-spacing: 2px;
    }

    .icons i {
      margin: 0 10px;
      font-style: normal;
      font-size: 16px;
      cursor: pointer;
      transition: color 0.3s;
    }

    .icons i:hover {
      color: #c5a893;
    }

    @media (max-width: 768px) {
      .form-row {
        flex-direction: column;
      }

      .newsletter {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <header class="navbar">
    <div class="logo">FOR THE LOVE <span>of Biolila</span></div>
    <nav>
        <ul>
          <li><a href="./prgt.html">HOME</a></li>
          <li><a href="./contact.php">CONTACT</a></li>
          <li><a href="./shop.html">THE SHOP</a></li>
        </ul>
    </nav>
  </header>

  <section class="contact">
    <h2>contact</h2>
    <p class="intro">I would love to hear from you!</p>
    <p class="email">Please fill out the form or email directly at:<br>
        chellaoua.chourouk35@g.ens-kouba.dz</p>

    <form class="contact-form" action="contact.php" method="post">
      <div class="form-row">
        <input type="text" name="name" placeholder="NAME" required>
        <input type="email" name="email" placeholder="EMAIL" required>
      </div>
      <div class="form-row">
        <input type="text" name="produits" placeholder="Produits" required>
        <input type="text" name="subject" placeholder="SUBJECT" required>
      </div>
      <textarea name="message" placeholder="MESSAGE" required></textarea>
      <button type="submit">SUBMIT</button>
    </form>

    <?php if ($formSent) echo $outputMessage; ?>
  </section>

  <section class="newsletter">
    <div class="left">
      <h3>NEWSLETTER</h3>
      <input type="email" placeholder="EMAIL">
      <button>SUBMIT</button>
    </div>
    <div class="right">
      <h3>SNAPCHAT</h3>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu36PLYBAc1fVwIe9o5SZbFhqbrFmjd1NQ_Q&s" alt="Snapcode">
    </div>
  </section>

  <footer>
    <div class="socials">
      <span>FOLLOW</span>
      <div class="icons">
        <i>B</i><i>i</i><i>o</i><i>L</i><i>i</i><i>L</i><i>A</i>
      </div>
    </div>
  </footer>
</body>
</html>
