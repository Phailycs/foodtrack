<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Food Track</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../assets/css/style_header.css"/>
        <link rel="stylesheet" href="../../assets/css/style_commande.css"/>
        <script type="text/javascript" src="../../assets/js/commande.js"></script>
        <script type="text/javascript" src="../../assets/js/jquery-3.4.1.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    </head>
    <link rel="shortcut icon" href="../../assets/img/Logo.ico">
    <body>
        <!-- Navbar -->
    <header>
			<div class="grid_header">
				<div class="image_logo">
						<img src="../../assets/img/logo.png">
						<h1 class="title" ><a class="link" href="../../">Food Track</a></h1>
				</div>
				<div class="accueil">
						<a class="link" href="../../"><h1 class="acc">Accueil</h1></a>
				</div>
			</div>
		</header>
        <!-- Fin Navbar -->
        <!-- Beginning of sections -->
        <!-- Présentation (1) -->
        <section>
            <div class="content">
                <p class="textp">
                    <b>Frity Company</b><br>
                    <span class="sbp">Spécialité frites - &euro;&euro;</span>
                </p>
            </div>
        </section>
        <!-- Sélection (2) -->
        <section>
          <ul class="double_colonne">
            <li>
              <form id="CmdForm" action="utilisateur.html">
                <h1>Commande</h1>
                <!-- One "tab" for each step in the form: -->
                <div class="tab" id="step1">
                  <div style="overflow:auto;">
                    <div style="text-align: center; margin: 15px auto;">
                      <button type="button" onclick="document.getElementById('step2').style.display='block' ; document.getElementById('step1').style.display='none'">Suivant</button>
                    </div>
                  </div>
                  <div class="gallery">
                      <div class="gallery-item">
                          <img class="gallery-image" src="../../assets/img/fporn1.jpg">
                          <div class="description">
                            <h1 class="desc_title">Burger</h1>
                            <p class="desc_text_title">Ingrédients :</p>
                            <p class="desc_text_contenu">Salade, concombre, poulet, ail, tomate...</p>
                          </div>
                          <div class="ajout">
                            <button class="text">Prendre</button>
                          </div>
                          <div class="prix">
                            <p class="text_prix">3€</p>
                          </div>
                      </div>
                      <div class="gallery-item">
                          <img class="gallery-image" src="../../assets/img/fporn2.jpg">
                          <div class="description">
                            <h1 class="desc_title">Sandwich</h1>
                            <p class="desc_text_title">Ingrédients :</p>
                            <p class="desc_text_contenu">Cheddar, jambon, pain complet, salade...</p>
                          </div>
                          <div class="ajout">
                            <button class="text">Prendre</button>
                          </div>
                          <div class="prix">
                            <p class="text_prix">2 . 70€</p>
                          </div>
                      </div>
                      <div class="gallery-item">
                          <img class="gallery-image" src="../../assets/img/fporn3.jpg">
                          <div class="description">
                            <h1 class="desc_title">Pizza</h1>
                            <p class="desc_text_title">Ingrédients :</p>
                            <p class="desc_text_contenu">Chorizo, fromage, crème fraiche, pâte fine...</p>
                          </div>
                          <div class="ajout">
                            <button class="text">Prendre</button>
                          </div>
                          <div class="prix">
                            <p class="text_prix">4 . 50€</p>
                          </div>                         
                      </div>
                  </div>
                  <div class="pagination p">
                    <ul>
                        <a class="is-active"><li></li></a>
                        <a><li></li></a>
                        <a><li></li></a>
                        <a><li></li></a>
                    </ul>
                    <div class="etape">&Eacute;tape 1 : Choisir son plat</div>
                  </div>
                </div>
                <div class="fa tab" id="step2">                          
                  <div style="overflow:auto;">
                    <div style="text-align: center; margin: 15px auto;">
                      <button type="button" class="PrevBtn" onclick="document.getElementById('step1').style.display='block' ; document.getElementById('step2').style.display='none'">Avant</button>
                      <button type="button" onclick="document.getElementById('step3').style.display='block' ; document.getElementById('step2').style.display='none'">Suivant</button>
                    </div>
                  </div>
                  <div class="gallery">
                    <div class="gallery-item">
                        <img class="gallery-image" src="../../assets/img/coca_cola.jpg">
                        <div class="description">
                          <h1 class="desc_title">Coca Cola</h1>
                        </div>
                        <div class="ajout">
                          <button class="text">Prendre</button>
                        </div>
                        <div class="prix">
                          <p class="text_prix">1 . 70€</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img class="gallery-image" src="../../assets/img/ice_tea.jpg">
                        <div class="description">
                          <h1 class="desc_title">Ice Tea</h1>
                        </div>
                        <div class="ajout">
                          <button class="text">Prendre</button>
                        </div>
                        <div class="prix">
                          <p class="text_prix">1 . 20€</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img class="gallery-image" src="../../assets/img/fanta.jpg">
                        <div class="description">
                          <h1 class="desc_title">Fanta</h1>
                        </div>
                        <div class="ajout">
                          <button class="text">Prendre</button>
                        </div> 
                        <div class="prix">
                          <p class="text_prix">1 . 60€</p>
                        </div>                         
                    </div>
                </div>
                  <div class="pagination p">
                    <ul>
                        <a><li></li></a>
                        <a class="is-active"><li></li></a>
                        <a><li></li></a>
                        <a><li></li></a>
                    </ul>
                    <div class="etape">&Eacute;tape 2 : Choisir sa boisson</div>
                  </div>
                </div>
                <div class="fa tab" id="step3">
                  <div style="overflow:auto;">
                    <div style="text-align: center; margin: 15px auto;">
                      <button type="button" class="PrevBtn" onclick="document.getElementById('step2').style.display='block' ; document.getElementById('step3').style.display='none'">Avant</button>
                      <button type="button" onclick="document.getElementById('step4').style.display='block' ; document.getElementById('step3').style.display='none'">Suivant</button>
                    </div>
                  </div>
                  <div class="gallery">
                    <div class="gallery-item">
                      <img class="gallery-image" src="../../assets/img/chips.jpg">
                      <div class="description">
                        <h1 class="desc_title">Chips</h1>
                      </div>
                      <div class="ajout">
                        <button class="text">Prendre</button>
                      </div>
                      <div class="prix">
                        <p class="text_prix">1€</p>
                      </div>                         
                    </div>
                    <div class="gallery-item">
                      <img class="gallery-image" src="../../assets/img/frites.jpeg">
                      <div class="description">
                        <h1 class="desc_title">Frites</h1>
                      </div>
                      <div class="ajout">
                        <button class="text">Prendre</button>
                      </div>
                      <div class="prix">
                        <p class="text_prix">1 . 75€</p>
                      </div>                         
                    </div>
                    <div class="gallery-item">
                      <img class="gallery-image" src="../../assets/img/potatoes.jpg">
                      <div class="description">
                        <h1 class="desc_title">Potatoes</h1>
                      </div>
                      <div class="ajout">
                        <button class="text">Prendre</button>
                      </div>
                      <div class="prix">
                        <p class="text_prix">2 . 10€</p>
                      </div>                          
                    </div>                            
                  </div>
                    <div class="pagination p">
                      <ul>
                          <a><li></li></a>
                          <a><li></li></a>
                          <a class="is-active"><li></li></a>
                          <a><li></li></a>
                      </ul>
                      <div class="etape">&Eacute;tape 3 : Choisir son suppléments</div>
                    </div>
                </div>
                <div class="fa tab" id="step4">                                                    
                  <div style="overflow:auto;">
                    <div style="text-align: center; margin: 15px auto;">
                      <button type="button" class="PrevBtn" onclick="document.getElementById('step3').style.display='block' ; document.getElementById('step4').style.display='none'">Avant</button>
                      <button id="nextBtn" type="submit">Confirmer ma commande</button>
                    </div>
                  </div>
                  <div class="encadrement_calendar">
                    <div class="calendar">      
                      <script>
                        $(document).ready(function () {
                            $('.disp_cal').on('click', function(ev) {
                            log("Commande possible pour " + $(ev.currentTarget).attr('data-hour') + ":" + $(ev.currentTarget).attr('data-min'));
                          });
                          $('.pln_cal').on('click', function(ev) {
                            log("Pas de créneaux dispo pour " + $(ev.currentTarget).attr('data-hour') + ":" + $(ev.currentTarget).attr('data-min'));
                          });
                        });
                      </script>      
                      <table>            
                          <thead>                    
                              <tr>                        
                                  <td></td>
                                  <td>11h</td>
                                  <td>12h</td>
                                  <td>13h</td>
                                  <td>14h</td>
                                  <td>15h</td>
          
                              </tr>
                          </thead>
          
                          <tbody>                    
                            <?php
                                  for ($iMin = 0; $iMin < 46; $iMin += 15) {
                                    ?>
                                  <tr>
                                  <td><?php echo $iMin; ?>min</td>
                                  <?php
                                      for ($iHour = 11; $iHour < 16; $iHour++) {
                                        $possible = rand(0,1);
                                        if ($possible) {
                                          ?>
                                          <td class="disp_cal" data-hour="<?php echo $iHour; ?>" data-min="<?php echo $iMin; ?>">&#x2714;</td>
                                        <?php
                                            } else {
                                              ?>
                                              <td class="pln_cal" data-hour="<?php echo $iHour; ?>" data-min="<?php echo $iMin; ?>">&#x2716;</td>
                                            <?php
                                                    }
                                  }  
                                  ?>
                                      </tr>
                                  <?php
                                }
                              ?>

                          </tbody>
                      </table>
                    </div>
                    <ul class="dd_horaire">                        
                      <li><select id="heure" required disabled>
                        <option selected disabled>Cliquer sur une case</option>
                        <option value="1">11H</option>
                        <option value="2">12H</option>
                        <option value="3">13H</option>
                        <option value="4">14H</option>
                        <option value="5">15H</option>
                      </select></li>
                      <li><select id="minute" required disabled>
                        <option selected disabled>"&#x2714;" pas dispo, "&#x2716;" dispo</option>
                        <option value="1">00min</option>
                        <option value="2">15min</option>
                        <option value="3">30min</option>
                        <option value="4">45min</option>
                      </select></li>
                    </ul>
                  </div>
                  <div class="pagination p">
                    <ul>
                        <a><li></li></a>
                        <a><li></li></a>
                        <a><li></li></a>
                        <a class="is-active"><li></li></a>
                    </ul>
                    <div class="etape">&Eacute;tape 4 : Choisir son heure de passage</div>
                  </div>
                </div>
              </form>
            </div>
            <div class="magic">
              <form id="CmdForm">
                <div class="contenu_panier">
                  <h4 style="text-align: center;">Panier</h4>
                  <p>Burger <span class="price">3€</span></p>
                  <p>Ice Tea <span class="price">1.20€</span></p>
                  <p>Fanta <span class="price">1.60€</span></p>
                  <p>Potatoes <span class="price">2.10€</span></p>
                  <hr color="white">
                  <p>Total <span class="price" style="color:#262626"><b>9€</b></span></p>
                </div>
              </form>
              </div>
            </li>
          </ul>
        </section>
        <!-- End of sections -->
        <!-- Footer -->
        <footer>
          <div><a href="#openCGU" class="decoration">Conditions générales d'utilisation</a></div>
          <div><a href="#openCGV" class="decoration">Conditions générales de vente</a></div>
          <div><a href="#openMl" class="decoration">Mentions légales et politique de confidentialité</a></div>
          <div><a>Copyright &copy; 2020 FOODTRACK</a></div>
        </footer>
    </body>
</html>