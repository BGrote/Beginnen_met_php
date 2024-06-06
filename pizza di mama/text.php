
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styletext.css">
    <title>Pizza di mama</title>
</head>
<body>
    <h1>Welkom bij Pizza di mama</h1>

    <form method="post" action="index.php">
        <table>
            <tr>
                <td>
                    <span class="pizzanaam">Pizza Margherita</span><br><br>
                    <img src="margherita.jpg" height="150px"><br>
                    € 12,50<br>
                    aantal: <input class="aantalmargarita" type="number" min="0" name="aantalmargarita" value="0" max="20">
                </td>
                <td>
                    <span class="pizzanaam">Pizza Funghi</span><br><br>
                    <img src="funghi.jpg" height="150px"><br>
                    € 12,50<br>
                    aantal: <input class="aantalfunghi" type="number" min="0" name="aantalfunghi" value="0" max="20">
                </td>
                <td>
                    <span class="pizzanaam">Pizza Mariana</span><br><br>
                    <img src="mariana.jpg" height="150px">
                    € 13,95<br>
                    aantal: <input class="aantalmariana" type="number" min="0" name="aantalmariana" value="0" max="20">
                </td>
                <td>
                    <span class="pizzanaam">Pizza Hawai</span><br><br>
                    <img src="hawai.jpg" height="150px">
                    € 11,50<br>
                    aantal: <input class="aantalhawai" type="number" min="0" name="aantalhawai" value="0" max="20">
                </td>
                <td>
                    <span class="pizzanaam">Pizza Quattro Formaggi</span><br><br>
                    <img src="quattro.jpg" height="150px">
                    € 15,00<br>
                    aantal: <input class="aantalquattro" type="number" min="0" name="aantalquattro" value="0" max="20">
                </td>
            </tr>        
        </table>

        <input type="submit" value="Toevoegen" class="bestelButton">
    </form>

    <div class="shopping-cart">
  <!-- Title -->
  <div class="title">
    Shopping Bag
  </div>
 
  <!-- Product #1 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="item-1.png" alt="" />
    </div>
 
    <div class="description">
      <span>Common Projects</span>
      <span>Bball High</span>
      <span>White</span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="" />
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="" />
      </button>
    </div>
 
    <div class="total-price">$549</div>
  </div>
 
  <!-- Product #2 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="item-2.png" alt=""/>
    </div>
 
    <div class="description">
      <span>Maison Margiela</span>
      <span>Future Sneakers</span>
      <span>White</span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="" />
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="" />
      </button>
    </div>
 
    <div class="total-price">$870</div>
  </div>
 
  <!-- Product #3 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="item-3.png" alt="" />
    </div>
 
    <div class="description">
      <span>Our Legacy</span>
      <span>Brushed Scarf</span>
      <span>Brown</span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="" />
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="" />
      </button>
    </div>
 
    <div class="total-price">$349</div>
  </div>
</div>
<script>
    $('.like-btn').on('click', function() {
   $(this).toggleClass('is-active');
});
$('.minus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
 
    if (value &amp;amp;gt; 1) {
        value = value - 1;
    } else {
        value = 0;
    }
 
  $input.val(value);
 
});
 
$('.plus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
 
    if (value &amp;amp;lt; 100) {
        value = value + 1;
    } else {
        value =100;
    }
 
    $input.val(value);
});
</script>
</body>
</html>
