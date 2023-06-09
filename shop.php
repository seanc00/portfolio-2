<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="device-width, initial-scale=1.0">
        <title>BIBI Books</title>
        <link rel="stylesheet" href="styles.css">
        <script src="myscripts.js"></script>
    </head>
    <body>
        <div class="header">
            <a href="index.php" class="logo"><span class="leftName">BIBI</span> <span class="rightName">Books</span></a>
            <div class="headerRight">
              <a href="index.php">Home</a>
              <a href="shop.php">Shop</a>
              <a href="basket.php">Basket</a>
            </div>
          </div>

          <div class="bookShopPanel">
            <div class="bookCoverInfo">
              <div>
                <img id="bookImage" src="images/pride-and-prejudice.jpg" alt="Front cover of the pride and prejudice book">
              </div>
              <div class="bookInfo">
                <div class="bookCoverInfo">
                  <div class="bookCoverLeft">
                    <div class="bookTitle">
                      <p name="bookTitle">Pride and Prejudice</p>
                    </div>
                    <div class="author">
                      <p>By Jane Austen</p>
                    </div>
                  </div>
                  <div class="bookInfoRight">
                    <div class="bookPrice">
                      <p> £24.99 GBP</p>
                    </div>
                  </div>
                </div>
                <div class="bookDescription">
                  <p>
                    Pride and Prejudice is an 1813 novel of manners by Jane Austen. The novel
                    follows the character development of Elizabeth Bennet, the dynamic 
                    protagonist of the book who learns about the repercussions of hasty 
                    judgments and comes to appreciate the difference between superficial
                    goodness and actual goodness.
                  </p>
                </div>
                <div>
                  <div class="quantity">
                    <div class="left">
                      <button id="minusButton" onclick="minusQuantity()" class="minusButton">-</button>
                      <input name="itemQuantity" id="itemQuantity" class="itemQuantity" value="1">
                      <button id="plusButton" onclick="addQuantity()" class="plusButton">+</button>
                    </div>
                    <div class="right">
                      <button name="addToBasket" class="addToBasket">Add to Basket</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="bookShopPanel">
            <div class="bookCoverInfo">
              <div>
                <img id="bookImage" src="images/the-color-purple.jpeg" alt="Front cover of the color purple book">
              </div>
              <div class="bookInfo">
                <div class="bookCoverInfo">
                  <div class="bookCoverLeft">
                    <div class="bookTitle">
                      <p name="bookTitle">The Color Purple</p>
                    </div>
                    <div class="author">
                      <p>By Alice Walker</p>
                    </div>
                  </div>
                  <div class="bookInfoRight">
                    <div class="bookPrice">
                      <p> £22.99 GBP</p>
                    </div>
                  </div>
                </div>
                <div class="bookDescription">
                  <p>
                    Celie, a young African-American woman, is raped by her father 
                    and bears two of his children. She is then married off to an 
                    abusive man and has a struggle-filled existence.
                    The Color Purple is a 1982 epistolary novel by American author
                    Alice Walker which won the 1983 Pulitzer Prize for Fiction and 
                    the National Book Award for Fiction.
                  </p>
                </div>
                <div>
                  <div class="quantity">
                    <div class="left">
                      <button id="minusButton" onclick="minusQuantity2()" class="minusButton">-</button>
                      <input name="itemQuantity2" id="itemQuantity2" class="itemQuantity" value="1">
                      <button id="plusButton" onclick="addQuantity2()" class="plusButton">+</button>
                    </div>
                    <div class="right">
                      <button name="addToBasket" class="addToBasket">Add to Basket</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="bookShopPanel">
            <div class="bookCoverInfo">
              <div>
                <img id="bookImage" src="images/where-the-crawdads-sing.jpg" alt="Front cover where the crawdads sing book">
              </div>
              <div class="bookInfo">
                <div class="bookCoverInfo">
                  <div class="bookCoverLeft">
                    <div class="bookTitle">
                      <p name="bookTitle">Where The Crawdads Sing</p>
                    </div>
                    <div class="author">
                      <p>By Delia Owens</p>
                    </div>
                  </div>
                  <div class="bookInfoRight">
                    <div class="bookPrice">
                      <p>£27.99 GBP</p>
                    </div>
                  </div>
                </div>
                <div class="bookDescription">
                  <p>
                    Where the Crawdads Sing is a 2018 coming-of-age murder mystery 
                    novel by American zoologist Delia Owens. The story follows two
                    timelines that slowly intertwine. The first timeline describes
                    the life and adventures of a young girl named Kya as she grows
                    up isolated in the marshes of North Carolina.
                  </p>
                </div>
                <div>
                  <div class="quantity">
                    <div class="left">
                      <button id="minusButton" onclick="minusQuantity3()" class="minusButton">-</button>
                      <input name="itemQuantity" id="itemQuantity3" class="itemQuantity" value="1">
                      <button id="plusButton" onclick="addQuantity3()" class="plusButton">+</button>
                    </div>
                    <div class="right">
                      <button name="addToBasket" class="addToBasket">Add to Basket</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="bookShopPanel">
            <div class="bookCoverInfo">
              <div>
                <img id="bookImage" src="images/surrounded-by-idiots.png" alt="Front cover of surrounded by idiots book">
              </div>
              <div class="bookInfo">
                <div class="bookCoverInfo">
                  <div class="bookCoverLeft">
                    <div class="bookTitle">
                      <p name="bookTitle">surrounded By Idiots</p>
                    </div>
                    <div class="author">
                      <p>By Thomas Eriksen</p>
                    </div>
                  </div>
                  <div class="bookInfoRight">
                    <div class="bookPrice">
                      <p> £19.99 GBP</p>
                    </div>
                  </div>
                </div>
                <div class="bookDescription">
                  <p>
                    Do you ever think you are the only one making any sense? Or 
                    tried to reason with your partner with disastrous results?
                    Do long, rambling answers drive you crazy? Or does your 
                    colleague’s abrasive manner get your back up? You are not alone.
                  </p>
                </div>
                <div>
                  <div class="quantity">
                    <div class="left">
                      <button id="minusButton" onclick="minusQuantity4()" class="minusButton">-</button>
                      <input name="itemQuantity" id="itemQuantity4" class="itemQuantity" value="1">
                      <button id="plusButton" onclick="addQuantity4()" class="plusButton">+</button>
                    </div>
                    <div class="right">
                      <button name="addToBasket" class="addToBasket">Add to Basket</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="bookShopPanel">
            <div class="bookCoverInfo">
              <div>
                <img id="bookImage" src="images/all-the-light-we-cannot-see.webp" alt="Front cover of all light we cannot see book">
              </div>
              <div class="bookInfo">
                <div class="bookCoverInfo">
                  <div class="bookCoverLeft">
                    <div class="bookTitle">
                      <p name="bookTitle">All The Light We Cannot See</p>
                    </div>
                    <div class="author">
                      <p>By Anthony Doerr</p>
                    </div>
                  </div>
                  <div class="bookInfoRight">
                    <div class="bookPrice">
                      <p> £16.99 GBP</p>
                    </div>
                  </div>
                </div>
                <div class="bookDescription">
                  <p>
                    All the Light We Cannot See is a 2014 war novel that was written 
                    by American author Anthony Doerr. The novel is set during World 
                    War II and centers around the characters Marie-Laure Leblanc, a 
                    blind French girl who takes refuge in her uncle's house in Saint-Malo 
                    after Paris is invaded by Nazi Germany; and Werner Pfennig, a bright 
                    German boy who is accepted into a military school because of his skills 
                    in radio technology before being sent to the military.
                  </p>
                </div>
                <div>
                  <div class="quantity">
                    <div class="left">
                      <button id="minusButton" onclick="minusQuantity5()" class="minusButton">-</button>
                      <input name="itemQuantity" id="itemQuantity5" class="itemQuantity" value="1">
                      <button id="plusButton" onclick="addQuantity5()" class="plusButton">+</button>
                    </div>
                    <div class="right">
                      <button name="addToBasket" class="addToBasket">Add to Basket</button>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="bookShopPanel">
            <div class="bookCoverInfo">
              <div>
                <img id="bookImage" src="images/the-power-of-letting-go.png" alt="Front cover of the power of letting go book">
              </div>
              <div class="bookInfo">
                <div class="bookCoverInfo">
                  <div class="bookCoverLeft">
                    <div class="bookTitle">
                      <p name="bookTitle">The Power Of Letting Go</p>
                    </div>
                    <div class="author">
                      <p>By John Purkiss</p>
                    </div>
                  </div>
                  <div class="bookInfoRight">
                    <div class="bookPrice">
                      <p> £22.99 GBP</p>
                    </div>
                  </div>
                </div>
                <div class="bookDescription">
                  <p>
                    When you let go, you live intuitively. Everything flows, because you are 
                    no longer attached to things being a certain way, to being a certain 
                    person or always being right. What a relief. The irony is that when you 
                    feel stuck in any area of your life - career, relationships, purpose, 
                    health or money - letting go can seem very hard. You cling on for dear 
                    life just at the moment you need to take the leap.
                  </p>
                </div>
                <div>
                  <div class="quantity">
                    <div class="left">
                      <button id="minusButton" onclick="minusQuantity6()" class="minusButton">-</button>
                      <input name="itemQuantity" id="itemQuantity6" class="itemQuantity" value="1">
                      <button id="plusButton" onclick="addQuantity6()" class="plusButton">+</button>
                    </div>
                    <div class="right">
                      <button name="addToBasket" class="addToBasket">Add to Basket</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="returnToTop">
            <div>
              <a class="returnButton" href="#">Return to top</a>
            </div>
          </div>
    </body>
</html>