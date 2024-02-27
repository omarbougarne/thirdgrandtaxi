<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CabHUB</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap" rel="stylesheet"> 
</head>
<body>
    <header id="page_header">
        <div id="logo">
            <img src="pics/cab hub.png" alt="Cab HUB">
            <br>
            <img src="pics/relax.png" alt="relax">
        </div>
        <nav id="nav_bar">
            <ul id="nav_list">
                <li class="nav_link">HOME</li>
                <li class="nav_link">ABOUT</li>
                <li class="nav_link">FEATURES</li>
                <li class="nav_link">BLOG</li>
                <li class="nav_link">ORDER NOW</li>
                <li class="nav_link">CONTACTS</li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="hero">
            <div id="hero_text">
                <h3>BOOK CAB NOW</h3>
            </div>
            
            <img src="pics/cap.png" alt="cap">
        </section>
        <section id="about">
            <div id="book_form">
                <h2 id="form_heading">BOOK A <span style="color: #ffc61a;">CAB</span></h2>
                <form action="">
                    <input type="text" name="name" id="name" placeholder="Name">
                    <input type="tel" name="phone" id="phone" placeholder="Phone">
                    <br>
                    <input type="date" name="when" id="when" placeholder="When">
                    <input type="time" name="time" id="time" placeholder="Time">
                    <br>
                    <input type="text" name="start" id="start" placeholder="Start">
                    <input type="text" name="end" id="end" placeholder="End">
                    <br>
                    <select name="vehicle" id="vechicle">
                        <option value="choose_vechicle">Choose Vechicle</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                    <br>
                    <input type="submit" value="SUBMIT">
                </form>
            </div>
        </section>
        <section id="choose">
            <h3>OUR</h3>
            <h3>TRAIFFS</h3>
            <div id="choose_class">
                <div class="card_contianer">
                    <img src="pics/side small cap (2).png" alt="choose cab">
                    <div class="card">
                        <h4>ECONOMY CLASS</h4>
                        <p>Quisque sollicitudin feugiat risus, eu posuere ex euismod eu. Phasellus hendrerit, massa efficitur.</p>
                        <h3>&#36;1,5/MI</h3>
                        <button class="read_more">READ MORE</button>
                    </div>
                </div>
                <div class="card_contianer">
                    <img src="pics/side small cap (2).png" alt="choose cab">
                    <div class="card">
                        <h4>STANDARD CLASS</h4>
                        <p>Quisque sollicitudin feugiat risus, eu posuere ex euismod eu. Phasellus hendrerit, massa efficitur.</p>
                        <h3>&#36;1,5/MI</h3>
                        <button class="read_more">READ MORE</button>
                    </div>
                </div>
                <div class="card_contianer">
                    <img src="pics/side small cap (2).png" alt="choose cab">
                    <div class="card">
                        <h4>BUSINESS CLASS</h4>
                        <p>Quisque sollicitudin feugiat risus, eu posuere ex euismod eu. Phasellus hendrerit, massa efficitur.</p>
                        <h3>&#36;1,5/MI</h3>
                        <button class="read_more">READ MORE</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>