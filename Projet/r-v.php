<!DOCTYPE html>
<!--Source: Genevieve Mainville-->
<html lang="fr">
<head>
        <meta charset="utf-8"> 
        <meta name="Description" content="">
        <title>LA - Photographie</title>
        <link rel="stylesheet" href="./css/style.css">
       
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bonheur+Royale&family=Gruppo&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <!--Navigation-->
            <nav class="nav">
                <div class="logo">
                    <a href="./index.html">
                        <span class="logo__la">La  </span><span class="logo__titre">Photographie</span>
                    </a>
                </div>
               
                <ul class="menu">
                    <li><a class="menu__link" href="portfolio.html">Portfolio</a></li>
                    <li><a class="menu__link" href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>  
        <body>
            <section class="">
                <div class="booking">
                    
                                <img class="booking__img" src="img/dog.jpg" />
                        <div class="booking__contenu">  
                        <div class="titre wrapper">
                            <h1>Pour un rendez-vous en studio</h1>
                        </div>
                        <div class="texte">
                            <p>
                                Choisissez une plage horaire
                            </p>
                        </div>

                        <div class="horaire">
                            <form class="horaire__form"action="seance.php" method="POST">
                                <div class="horaire__input">
                                    <label for="rvchoix">Choisissez le type de s??ance</label>
                                    <select name ="rvchoix">
                                        <option value="groupe">Familiale/Groupe</option>
                                        <option value="animal">Animale</option>
                                        <option value="mariage">Mariage</option>
                                        <option value="corporatif">Corporatif</option>
                                        <option value="Portrait">Portrait</option>
                                        <option value="evenementiel">??v??nementiel</option>
                                    </select>
                                </div>

                                <div class="horaire__input">
                                    <label>Date de la s??ance </label>
                                    <input type="date" name="rvdate" required>
                                </div>

                                <div class="horaire__input">
                                    <label for="rvheure">Choisissez l'heure</label>
                                    <select name ="rvheure">
                                        <option value="10h - 11h">10h - 11h</option>
                                        <option value="13h - 14h">13h - 14h</option>
                                        <option value="14h - 15h">14h - 15h</option>
                                        <option value="15h - 16h">15h - 16h</option>
                                        <option value="16h - 17h">16h - 17h</option>
                                        <option value="18h - 19h">18h - 19h</option>
                                    </select>
                                </div>
                                <div >
                                    <button class="form__btn">Confirmer</button> 
                                </div>
                            </form>
                        </div> 
                        </div>  
                     </div>
            </section>
        </body>
        <footer >
            <div class="logo footer__line">
                <a href="./index.html">
                    <span class="logo__la">La  </span><span class="logo__titre">Photographie</span>
                </a>
                <p>1111 rue Canon, Montr??al</p>
                
                <!--Navigation-->
            </div>
            <div class="footer__nav-wrapper">
                <ul class="footer__nav">
                  <li ><a class="footer__nav-link" href="index.html">Services</a></li>
                  <li ><a class="footer__nav-link" href="portfolio.html">Portfolio</a></li>
                    <!-- Facebook -->
                    <li class="icon__wrapper">
                        <a  href="#">
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 400 400"><path d="M27.6 16C15.7 16 6.2 25 6.2 36.3v327.4c0 11.3 9.5 20.3 21.4 20.3h185.6V241.4h-50.4v-55.6h50.4V145c0-47.5 30.5-73.4 75.2-73.4 21.4 0 39.7 1.5 45.2 2.1v49.6h-30.9c-24.2 0-29 10.9-29 27v35.5h57.9l-7.5 55.6h-50.4V384h98.6c11.9 0 21.4-9 21.4-20.3V36.3C393.6 25 384.1 16 372.2 16H27.6z" fill="#000000"/></svg>
                        </a>
                    </li>
                    <!-- Twitter -->
                    <li class="icon__wrapper" >
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 400 400"><path d="M127.1 359.3c148 0 228.9-122.5 228.9-228.9 0-3.5 0-6.9-.2-10.4 15.7-11.4 29.4-25.5 40.2-41.7-14.7 6.5-30.2 10.8-46.1 12.7 16.7-10 29.4-25.9 35.3-44.5-15.7 9.4-33.1 15.9-51 19.6-30.4-32.5-81.5-33.9-113.7-3.5-20.8 19.6-29.8 49-23.3 76.8-64.7-3.3-124.9-33.7-165.8-84.1C9.9 92 20.9 139 56.3 162.7c-12.9-.4-25.3-3.9-36.5-10v1c0 38.4 26.9 71.3 64.5 78.8-11.8 3.3-24.3 3.7-36.3 1.4 10.6 32.7 40.6 55.1 75.1 55.9-28.4 22.5-63.7 34.5-99.8 34.5-6.3 0-12.9-.4-19.2-1.2 36.4 23.7 79.3 36.2 123 36.2" fill="#000000"/></svg>
                        </a>
                    </li>
                    <!-- Instagram -->
                    <li class="icon__wrapper">
                        <a  href="#">
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 400 400"><g fill="#000000"><path d="M282.4 16H117.6C61.5 16 16 61.5 16 117.6v164.9c0 56 45.5 101.6 101.6 101.6h164.9c56 0 101.6-45.5 101.6-101.6V117.6C384 61.5 338.5 16 282.4 16zm68.9 266.4c0 38-30.9 68.9-68.9 68.9H117.6c-38 0-68.9-30.9-68.9-68.9V117.6c0-38 30.9-68.9 68.9-68.9h164.9c38 0 68.9 30.9 68.9 68.9v164.8h-.1z"/><path d="M200 105.1c-52.3 0-94.9 42.5-94.9 94.9 0 52.3 42.5 94.9 94.9 94.9s94.9-42.6 94.9-94.9-42.6-94.9-94.9-94.9zm0 157.1c-34.3 0-62.2-27.9-62.2-62.2s27.9-62.2 62.2-62.2 62.2 27.9 62.2 62.2-27.9 62.2-62.2 62.2zM298.8 77.5c-6.3 0-12.5 2.6-16.9 7-4.5 4.4-7 10.6-7 16.9 0 6.3 2.6 12.5 7 16.9 4.4 4.4 10.6 7 16.9 7s12.5-2.6 16.9-7c4.5-4.5 7-10.7 7-16.9 0-6.3-2.6-12.5-7-16.9-4.4-4.5-10.5-7-16.9-7z"/></g></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
</html>