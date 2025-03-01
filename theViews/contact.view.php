<?php
require BASE_PATH . "partials/head.php";?>
  <script defer src="../contact-validation.js"></script>
  <style>
    .unhidden{
      display: block;
    }
    .hidden{
      display: none;
    }
  </style>
</head>
<body>
<div style="display: flex;flex-direction: column; min-height:100vh; ">
  <?php require BASE_PATH . "partials/header.php"?>
    <main style="flex:1">
      <div class="align-container">
        <div class="contact-container">
          <div class="image-container">
            <img src="../images/website-contact.png" alt="contact-us">
          </div>
          <form id="contact" method="post" action="../controllers/contact.php">
            <div class="email-div">
              <label for="email">Email</label><br>
              <input type="email" name="email" id="email" placeholder="johndoe@email.com" value="<?=((isset($_POST['email']) && $errors !== []) ? htmlspecialchars($_POST['email']) : false)?>">
            </div>
            <div class="message-div">
              <label for="message">Your message</label><br>
              <input type="textarea" id="message" name="message" placeholder="Complaints or Suggestions" value="<?=((isset($_POST['message']) && $errors !== []) ? htmlspecialchars($_POST['message']) : false)?>">
            </div>
            <p id="error-message"></p>
            <?php if(isset($errors['general'])):?>
              <p style="color:red;margin:0;opacity:0.8"> 
                <?= $errors['general']?>
              </p>
            <?php elseif(isset($errors['email'])):?>
              <p style="color:red;margin:0;opacity:0.8"> 
                 <?= $errors['email']?>
              </p>
            <?php elseif(isset($errors['message'])):?>
              <p style="color:red;margin:0;opacity:0.8"> 
                <?= $errors['message']?>
              </p>
            <?php endif?>
            <button type="submit">Send message</button>
          </form>
        </div>
      </div>
    </main>

  <?php require BASE_PATH . 'partials/footer.php'?>  
  <script>
  const searchBar = document.querySelector('.searchBar');
  const searchIcon = document.querySelector('#search-div');
  const hamburger = document.querySelector('.hamburger');

  hamburger.onclick = function() {
    let navBar = document.querySelector('.nav-bar-mobile');
    navBar.classList.toggle("active");
  }

  searchBar.addEventListener('click',hiddenSearch);

  function hiddenSearch () {
    searchIcon.classList.toggle('unhidden');
  }
</script>  
</body>
</html>