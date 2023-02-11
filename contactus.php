<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contactus.css">
</head>
<body>
    
        <div class="wrapper">
          <h2>Kontakti</h2>
          <form action="" method="POST">
            <div class="form-group">
              <label for="name">Emri</label>
              <input type="text" name="Name" id="name" placeholder="Emri dhe Mbiemri" required minlength="3" maxlength="25" />
            </div>
            <div class="form-group">
              <label for="email">Email Addressa</label>
              <input type="email" name="Email" id="email" placeholder="email@domain.tld" required />
            </div>
            <div class="form-group">
              <label for="message">Messazhi</label>
              <textarea name="Message" id="message" rows="5" placeholder="Shkruani mesazhin ketu...."></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="submit"><i class="far fa-paper-plane"></i>Dergo</button>
              <a href="index.php"class="submit"style="text-decoration:none;">Kthehu Mbrapa</a>
            </div>
          </form>
        </div>
      
      
</body>
</html>