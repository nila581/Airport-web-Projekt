<?php
require BASE_PATH . "partials/head.php";?>
  <script defer src="contact-validation.js"></script>
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
      <div class="contact-container">
        <form id="contact">
          <p id="error-message"></p>
          <div class="email-div">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="johndoe@email.com">
          </div>
          <div class="message-div">
            <label for="message">Your message</label><br>
            <input type="textarea" id="message" name="message" placeholder="I need...">
          </div>
          <button type="submit">Send message</button>
        </form>
      </div>
    </main>

  <?php require BASE_PATH . 'partials/footer.php'?>  
  <script>
  const searchBar = document.querySelector('.searchBar');
  const searchIcon = document.querySelector('#search-div');

  searchBar.addEventListener('click',hiddenSearch);

  function hiddenSearch () {
    searchIcon.classList.toggle('unhidden');
  }
</script>  
</body>
</html>