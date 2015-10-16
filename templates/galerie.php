<?php /* Template Name: Galerie */ 
get_header(); ?>

    <div class="container-fluid container-title blue-title blue-title-medium" style="position:relative;">
        <div class="col-md-12 text-center title-wrap">
            <h2>Galerie habillage évènementiel</h2>
        </div>
    </div>
    
    <div class="container-fluid" style="background-color:#02a1f5;">
        <div class="container commande-menu">
            <div class="col-md-4 text-center">
                <a href="#" class="commande-menu-link" id="showHabillage">HABILLAGE ÉVÈNEMENTIEL</a>
            </div>
            <div class="col-md-4 text-center">
                <a href="#" class="commande-menu-link commande-menu-link-inactive" id="showEmailing">E-MAILING</a>
            </div>
            <div class="col-md-4 text-center">
                <a href="#" class="commande-menu-link commande-menu-link-inactive" id="showRelooking">RELOOKING TOTAL</a>
            </div>
        </div>
    </div>
        
    <div class="container page-content" id="galerie-page">
        <div class="galerieHabillage">
            <div class="container" style="margin-top:25px; margin-bottom:50px;">
                    <p style="display:inline-block; font-size:35px; font-weight:600;" class="galerieChoixTitle">Soldes d'été</p>
                    <div class="galerie-choix-event">
                        <a href="#" class="services-bouton" data-filtre="show-noel-nouvel-an">Noël / Nouvel An</a>
                    </div>
                
                    <div class="galerie-choix-event">
                        <a href="#" class="services-bouton" data-filtre="show-soldes-dhiver">Soldes d'hiver</a>
                    </div>
                
                    <div class="galerie-choix-event">
                        <a href="#" class="services-bouton" data-filtre="show-saint-valentin">Saint-Valentin</a>
                    </div>
                
                    <div class="galerie-choix-event">
                        <a href="#" class="services-bouton" data-filtre="show-fete-des-meres">Fête des mères</a>
                    </div>
                
                    <div class="galerie-choix-event">
                        <a href="#" class="services-bouton-active" data-filtre="show-soldes-dete">Soldes d'été</a>
                    </div>
                
                    <div class="galerie-choix-event">
                        <a href="#" class="services-bouton" data-filtre="show-halloween">Halloween</a>
                    </div>
            </div>
            
            <div class="container liste-kit" style="padding:0;">
                <div class="col-sm-4 bloc-kit show-soldes-dete">
                <p>KIT GRAPHIQUE SHOPPING BAG</p>
                <a href="#" class="kit-link" style="position:relative; display: inline-block;"><img src="<?php echo get_home_url(); ?>/img/shopping-bag.jpg" alt="Shopping bag" class="thumbnail-kit"/><img src="<?php echo get_home_url(); ?>/img/loupe-kit.png" alt="Shopping bag" class="loupe-kit" style="position:absolute; right:0; bottom:0; display:none; outline:none !important;"/></a>
                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index:9999;">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" >KIT GRAPHIQUE SHOPPING BAG</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo get_home_url(); ?>/img/kit-popup.jpg" alt="Shopping bag" />
                            </div>
                            <div class="col-md-6 popup-desc" >
                                <p class="popup-titre">Éléments graphiques du kit</p>
                                <p class="popup-prix">À partir de 99€</p>
                                <p class="popup-soustitre">Kit graphique pour les soldes d'été</p>
                                <p class="popup-introliste">Le kit graphique comprend :</p>
                                <ul>
                                    <li>Un fond habillage soldes d'été</li>
                                    <li>Une touche design sur votre logo</li>
                                    <li>Un design de slide soldes d'été</li>
                                    <li>Vos fichiers livrés en PSD en 48h</li>
                                </ul>
                                <p class="popup-introliste">En option : </p>
                                <ul>
                                    <li>Intégration du kit graphique</li>
                                    <li>Design d'un slide supplémentaire</li>
                                    <li>Design bouton "ajouter au panier"</li>
                                    <li>Design vignettes produits</li>
                                    <li>Modification sur le kit (couleur, élément, etc.)</li>
                                </ul>
                            </div>
                            <div class="col-md-6 popup-couleur">
                                <div style="width:348px; margin:auto;">
                                    <img src="<?php echo get_home_url(); ?>/img/shopping-bag.jpg" alt="Shopping bag" />
                                    <div class="color-slider-wrap" style="position:relative;">
                                        <div class="color-slider" style="overflow:hidden; white-space:nowrap; margin-top:15px;">
                                            <img src="<?php echo get_home_url(); ?>/img/shopping-bag.jpg" alt="Shopping bag" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/shopping-bag-blue.jpg" alt="Shopping bag" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/shopping-bag.jpg" alt="Shopping bag" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/shopping-bag-blue.jpg" alt="Shopping bag" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/shopping-bag-yellow.jpg" alt="Shopping bag" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/shopping-bag-blue.jpg" alt="Shopping bag" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/shopping-bag.jpg" alt="Shopping bag" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/shopping-bag-yellow.jpg" alt="Shopping bag" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/shopping-bag-yellow.jpg" alt="Shopping bag" style="width:40%;"/>
                                        </div>
                                        <img src="<?php echo get_home_url(); ?>/img/popup-left.png" alt="Left" class="popup-left"/>
                                        <img src="<?php echo get_home_url(); ?>/img/popup-right.png" alt="Right" class="popup-right" />
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-popup" data-dismiss="modal">Retour aux thèmes</button>
                        <a href="<?php echo get_home_url(); ?>/commande/" class="btn btn-popup-blue">Commander</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            
            <div class="col-sm-4 bloc-kit show-soldes-dete">
                <p>KIT GRAPHIQUE BULLE CARRE</p>
                <a href="#" class="kit-link" style="position:relative; display: inline-block;"><img src="<?php echo get_home_url(); ?>/img/bulle-carre.jpg" alt="Bulle carré" class="thumbnail-kit"/><img src="<?php echo get_home_url(); ?>/img/loupe-kit.png" alt="Bulle carré" class="loupe-kit" style="position:absolute; right:0; bottom:0; display:none; outline:none !important;"/></a>
                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index:9999;">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" >KIT GRAPHIQUE BULLE CARRE</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo get_home_url(); ?>/img/kit-popup.jpg" alt="Bulle carré" />
                            </div>
                            <div class="col-md-6 popup-desc" >
                                <p class="popup-titre">Éléments graphiques du kit</p>
                                <p class="popup-prix">À partir de 99€</p>
                                <p class="popup-soustitre">Kit graphique pour les soldes d'été</p>
                                <p class="popup-introliste">Le kit graphique comprend :</p>
                                <ul>
                                    <li>Un fond habillage soldes d'été</li>
                                    <li>Une touche design sur votre logo</li>
                                    <li>Un design de slide soldes d'été</li>
                                    <li>Vos fichiers livrés en PSD en 48h</li>
                                </ul>
                                <p class="popup-introliste">En option : </p>
                                <ul>
                                    <li>Intégration du kit graphique</li>
                                    <li>Design d'un slide supplémentaire</li>
                                    <li>Design bouton "ajouter au panier"</li>
                                    <li>Design vignettes produits</li>
                                    <li>Modification sur le kit (couleur, élément, etc.)</li>
                                </ul>
                            </div>
                            <div class="col-md-6 popup-couleur">
                                <div style="width:348px; margin:auto;">
                                    <img src="<?php echo get_home_url(); ?>/img/bulle-carre.jpg" alt="Bulle carré" />
                                    <div class="color-slider-wrap" style="position:relative;">
                                        <div class="color-slider" style="overflow:hidden; white-space:nowrap; margin-top:15px;">
                                            <img src="<?php echo get_home_url(); ?>/img/bulle-carre.jpg" alt="Bulle carré" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/bulle-carre.jpg" alt="Bulle carré" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/bulle-carre.jpg" alt="Bulle carré" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/bulle-carre.jpg" alt="Bulle carré" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/bulle-carre.jpg" alt="Bulle carré" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/bulle-carre.jpg" alt="Bulle carré" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/bulle-carre.jpg" alt="Bulle carré" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/bulle-carre.jpg" alt="Bulle carré" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/bulle-carre.jpg" alt="Bulle carré" style="width:40%;"/>
                                        </div>
                                        <img src="<?php echo get_home_url(); ?>/img/popup-left.png" alt="Left" class="popup-left"/>
                                        <img src="<?php echo get_home_url(); ?>/img/popup-right.png" alt="Right" class="popup-right" />
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-popup" data-dismiss="modal">Retour aux thèmes</button>
                        <a href="<?php echo get_home_url(); ?>/commande/" class="btn btn-popup-blue">Commander</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            
            <div class="col-sm-4 bloc-kit show-saint-valentin" style="display:none;">
                <p>KIT GRAPHIQUE LUMIÈRE</p>
                <a href="#" class="kit-link" style="position:relative; display: inline-block;"><img src="<?php echo get_home_url(); ?>/img/lumiere.jpg" alt="Lumière" class="thumbnail-kit"/><img src="<?php echo get_home_url(); ?>/img/loupe-kit.png" alt="Lumière" class="loupe-kit" style="position:absolute; right:0; bottom:0; display:none; outline:none !important;"/></a>
                <div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  style="z-index:9999;">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" >KIT GRAPHIQUE LUMIÈRE</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo get_home_url(); ?>/img/kit-popup.jpg" alt="Lumière" />
                            </div>
                            <div class="col-md-6 popup-desc" >
                                <p class="popup-titre">Éléments graphiques du kit</p>
                                <p class="popup-prix">À partir de 99€</p>
                                <p class="popup-soustitre">Kit graphique pour la Saint-Valentin</p>
                                <p class="popup-introliste">Le kit graphique comprend :</p>
                                <ul>
                                    <li>Un fond habillage Saint-Valentin</li>
                                    <li>Une touche design sur votre logo</li>
                                    <li>Un design de slide Saint-Valentin</li>
                                    <li>Vos fichiers livrés en PSD en 48h</li>
                                </ul>
                                <p class="popup-introliste">En option : </p>
                                <ul>
                                    <li>Intégration du kit graphique</li>
                                    <li>Design d'un slide supplémentaire</li>
                                    <li>Design bouton "ajouter au panier"</li>
                                    <li>Design vignettes produits</li>
                                    <li>Modification sur le kit (couleur, élément, etc.)</li>
                                </ul>
                            </div>
                            <div class="col-md-6 popup-couleur">
                                <div style="width:348px; margin:auto;">
                                    <img src="<?php echo get_home_url(); ?>/img/lumiere.jpg" alt="Lumière" />
                                    <div class="color-slider-wrap" style="position:relative;">
                                        <div class="color-slider" style="overflow:hidden; white-space:nowrap; margin-top:15px;">
                                            <img src="<?php echo get_home_url(); ?>/img/lumiere.jpg" alt="Lumière" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/lumiere.jpg" alt="Lumière" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/lumiere.jpg" alt="Lumière" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/lumiere.jpg" alt="Lumière" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/lumiere.jpg" alt="Lumière" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/lumiere.jpg" alt="Lumière" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/lumiere.jpg" alt="Lumière" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/lumiere.jpg" alt="Lumière" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/lumiere.jpg" alt="Lumière" style="width:40%;"/>
                                        </div>
                                        <img src="<?php echo get_home_url(); ?>/img/popup-left.png" alt="Left" class="popup-left"/>
                                        <img src="<?php echo get_home_url(); ?>/img/popup-right.png" alt="Right" class="popup-right" />
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-popup" data-dismiss="modal">Retour aux thèmes</button>
                        <a href="<?php echo get_home_url(); ?>/commande/" class="btn btn-popup-blue">Commander</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            
            <div class="col-sm-4 bloc-kit show-soldes-dete">
                <p>KIT GRAPHIQUE PASTILLES</p>
                <a href="#" class="kit-link" style="position:relative; display: inline-block;"><img src="<?php echo get_home_url(); ?>/img/pastilles.jpg" alt="Pastilles" class="thumbnail-kit"/><img src="<?php echo get_home_url(); ?>/img/loupe-kit.png" alt="Pastilles" class="loupe-kit" style="position:absolute; right:0; bottom:0; display:none; outline:none !important;"/></a>
                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index:9999;">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" >KIT GRAPHIQUE PASTILLES</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo get_home_url(); ?>/img/kit-popup.jpg" alt="Pastilles" />
                            </div>
                            <div class="col-md-6 popup-desc" >
                                <p class="popup-titre">Éléments graphiques du kit</p>
                                <p class="popup-prix">À partir de 99€</p>
                                <p class="popup-soustitre">Kit graphique pour les soldes d'été</p>
                                <p class="popup-introliste">Le kit graphique comprend :</p>
                                <ul>
                                    <li>Un fond habillage soldes d'été</li>
                                    <li>Une touche design sur votre logo</li>
                                    <li>Un design de slide soldes d'été</li>
                                    <li>Vos fichiers livrés en PSD en 48h</li>
                                </ul>
                                <p class="popup-introliste">En option : </p>
                                <ul>
                                    <li>Intégration du kit graphique</li>
                                    <li>Design d'un slide supplémentaire</li>
                                    <li>Design bouton "ajouter au panier"</li>
                                    <li>Design vignettes produits</li>
                                    <li>Modification sur le kit (couleur, élément, etc.)</li>
                                </ul>
                            </div>
                            <div class="col-md-6 popup-couleur">
                                <div style="width:348px; margin:auto;">
                                    <img src="<?php echo get_home_url(); ?>/img/pastilles.jpg" alt="Pastilles" />
                                    <div class="color-slider-wrap" style="position:relative;">
                                        <div class="color-slider" style="overflow:hidden; white-space:nowrap; margin-top:15px;">
                                            <img src="<?php echo get_home_url(); ?>/img/pastilles.jpg" alt="Pastilles" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/pastilles.jpg" alt="Pastilles" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/pastilles.jpg" alt="Pastilles" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/pastilles.jpg" alt="Pastilles" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/pastilles.jpg" alt="Pastilles" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/pastilles.jpg" alt="Pastilles" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/pastilles.jpg" alt="Pastilles" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/pastilles.jpg" alt="Pastilles" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/pastilles.jpg" alt="Pastilles" style="width:40%;"/>
                                        </div>
                                        <img src="<?php echo get_home_url(); ?>/img/popup-left.png" alt="Left" class="popup-left"/>
                                        <img src="<?php echo get_home_url(); ?>/img/popup-right.png" alt="Right" class="popup-right" />
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-popup" data-dismiss="modal">Retour aux thèmes</button>
                        <a href="<?php echo get_home_url(); ?>/commande/" class="btn btn-popup-blue">Commander</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            
            <div class="col-sm-4 bloc-kit show-soldes-dhiver" style="display:none;">
                <p>KIT GRAPHIQUE WONDERFUL SEASON</p>
                <a href="#" class="kit-link" style="position:relative; display: inline-block;"><img src="<?php echo get_home_url(); ?>/img/wonderful-season.jpg" alt="Wonderful season" class="thumbnail-kit"/><img src="<?php echo get_home_url(); ?>/img/loupe-kit.png" alt="Wonderful season" class="loupe-kit" style="position:absolute; right:0; bottom:0; display:none; outline:none !important;"/></a>
                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index:9999;">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" >KIT GRAPHIQUE WONDERFUL SEASON</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo get_home_url(); ?>/img/kit-popup.jpg" alt="Wonderful season" />
                            </div>
                            <div class="col-md-6 popup-desc" >
                                <p class="popup-titre">Éléments graphiques du kit</p>
                                <p class="popup-prix">À partir de 99€</p>
                                <p class="popup-soustitre">Kit graphique pour soldes d'hiver</p>
                                <p class="popup-introliste">Le kit graphique comprend :</p>
                                <ul>
                                    <li>Un fond habillage soldes d'hiver</li>
                                    <li>Une touche design sur votre logo</li>
                                    <li>Un design de slide soldes d'hiver</li>
                                    <li>Vos fichiers livrés en PSD en 48h</li>
                                </ul>
                                <p class="popup-introliste">En option : </p>
                                <ul>
                                    <li>Intégration du kit graphique</li>
                                    <li>Design d'un slide supplémentaire</li>
                                    <li>Design bouton "ajouter au panier"</li>
                                    <li>Design vignettes produits</li>
                                    <li>Modification sur le kit (couleur, élément, etc.)</li>
                                </ul>
                            </div>
                            <div class="col-md-6 popup-couleur">
                                <div style="width:348px; margin:auto;">
                                    <img src="<?php echo get_home_url(); ?>/img/wonderful-season.jpg" alt="Wonderful season" />
                                    <div class="color-slider-wrap" style="position:relative;">
                                        <div class="color-slider" style="overflow:hidden; white-space:nowrap; margin-top:15px;">
                                            <img src="<?php echo get_home_url(); ?>/img/wonderful-season.jpg" alt="Wonderful season" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/wonderful-season.jpg" alt="Wonderful season" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/wonderful-season.jpg" alt="Wonderful season" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/wonderful-season.jpg" alt="Wonderful season" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/wonderful-season.jpg" alt="Wonderful season" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/wonderful-season.jpg" alt="Wonderful season" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/wonderful-season.jpg" alt="Wonderful season" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/wonderful-season.jpg" alt="Wonderful season" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/wonderful-season.jpg" alt="Wonderful season" style="width:40%;"/>
                                        </div>
                                        <img src="<?php echo get_home_url(); ?>/img/popup-left.png" alt="Left" class="popup-left"/>
                                        <img src="<?php echo get_home_url(); ?>/img/popup-right.png" alt="Right" class="popup-right" />
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-popup" data-dismiss="modal">Retour aux thèmes</button>
                        <a href="<?php echo get_home_url(); ?>/commande/" class="btn btn-popup-blue">Commander</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            
            <div class="col-sm-4 bloc-kit show-soldes-dhiver" style="display:none;">
                <p>KIT GRAPHIQUE TEXTE</p>
                <a href="#" class="kit-link" style="position:relative; display: inline-block;"><img src="<?php echo get_home_url(); ?>/img/texte.jpg" alt="Texte" class="thumbnail-kit"/><img src="<?php echo get_home_url(); ?>/img/loupe-kit.png" alt="Texte" class="loupe-kit" style="position:absolute; right:0; bottom:0; display:none; outline:none !important;"/></a>
                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index:9999;">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" >KIT GRAPHIQUE TEXTE</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo get_home_url(); ?>/img/kit-popup.jpg" alt="Texte" />
                            </div>
                            <div class="col-md-6 popup-desc" >
                                <p class="popup-titre">Éléments graphiques du kit</p>
                                <p class="popup-prix">À partir de 99€</p>
                                <p class="popup-soustitre">Kit graphique pour soldes d'hiver</p>
                                <p class="popup-introliste">Le kit graphique comprend :</p>
                                <ul>
                                    <li>Un fond habillage soldes d'hiver</li>
                                    <li>Une touche design sur votre logo</li>
                                    <li>Un design de slide soldes d'hiver</li>
                                    <li>Vos fichiers livrés en PSD en 48h</li>
                                </ul>
                                <p class="popup-introliste">En option : </p>
                                <ul>
                                    <li>Intégration du kit graphique</li>
                                    <li>Design d'un slide supplémentaire</li>
                                    <li>Design bouton "ajouter au panier"</li>
                                    <li>Design vignettes produits</li>
                                    <li>Modification sur le kit (couleur, élément, etc.)</li>
                                </ul>
                            </div>
                           <div class="col-md-6 popup-couleur">
                                <div style="width:348px; margin:auto;">
                                    <img src="<?php echo get_home_url(); ?>/img/texte.jpg" alt="Texte" />
                                    <div class="color-slider-wrap" style="position:relative;">
                                        <div class="color-slider" style="overflow:hidden; white-space:nowrap; margin-top:15px;">
                                            <img src="<?php echo get_home_url(); ?>/img/texte.jpg" alt="Texte" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/texte.jpg" alt="Texte" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/texte.jpg" alt="Texte" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/texte.jpg" alt="Texte" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/texte.jpg" alt="Texte" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/texte.jpg" alt="Texte" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/texte.jpg" alt="Texte" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/texte.jpg" alt="Texte" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/texte.jpg" alt="Texte" style="width:40%;"/>
                                        </div>
                                        <img src="<?php echo get_home_url(); ?>/img/popup-left.png" alt="Left" class="popup-left"/>
                                        <img src="<?php echo get_home_url(); ?>/img/popup-right.png" alt="Right" class="popup-right" />
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-popup" data-dismiss="modal">Retour aux thèmes</button>
                        <a href="<?php echo get_home_url(); ?>/commande/" class="btn btn-popup-blue">Commander</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            
            <div class="col-sm-4 bloc-kit show-noel-nouvel-an" style="display:none;">
                <p>KIT GRAPHIQUE SOLDES STARS</p>
                <a href="#" class="kit-link" style="position:relative; display: inline-block;"><img src="<?php echo get_home_url(); ?>/img/soldes-stars.jpg" alt="Soldes stars" class="thumbnail-kit"/><img src="<?php echo get_home_url(); ?>/img/loupe-kit.png" alt="Soldes stars" class="loupe-kit" style="position:absolute; right:0; bottom:0; display:none; outline:none !important;"/></a>
                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index:9999;">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" >KIT GRAPHIQUE SOLDES STARS</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo get_home_url(); ?>/img/kit-popup.jpg" alt="Soldes stars" />
                            </div>
                            <div class="col-md-6 popup-desc" >
                                <p class="popup-titre">Éléments graphiques du kit</p>
                                <p class="popup-prix">À partir de 99€</p>
                                <p class="popup-soustitre">Kit graphique pour Noël / Nouvel an</p>
                                <p class="popup-introliste">Le kit graphique comprend :</p>
                                <ul>
                                    <li>Un fond habillage Noël / Nouvel an</li>
                                    <li>Une touche design sur votre logo</li>
                                    <li>Un design de slide Noël / Nouvel an</li>
                                    <li>Vos fichiers livrés en PSD en 48h</li>
                                </ul>
                                <p class="popup-introliste">En option : </p>
                                <ul>
                                    <li>Intégration du kit graphique</li>
                                    <li>Design d'un slide supplémentaire</li>
                                    <li>Design bouton "ajouter au panier"</li>
                                    <li>Design vignettes produits</li>
                                    <li>Modification sur le kit (couleur, élément, etc.)</li>
                                </ul>
                            </div>
                            <div class="col-md-6 popup-couleur">
                                <div style="width:348px; margin:auto;">
                                    <img src="<?php echo get_home_url(); ?>/img/soldes-stars.jpg" alt="Soldes stars" />
                                    <div class="color-slider-wrap" style="position:relative;">
                                        <div class="color-slider" style="overflow:hidden; white-space:nowrap; margin-top:15px;">
                                            <img src="<?php echo get_home_url(); ?>/img/soldes-stars.jpg" alt="Soldes stars" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/soldes-stars.jpg" alt="Soldes stars" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/soldes-stars.jpg" alt="Soldes stars" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/soldes-stars.jpg" alt="Soldes stars" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/soldes-stars.jpg" alt="Soldes stars" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/soldes-stars.jpg" alt="Soldes stars" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/soldes-stars.jpg" alt="Soldes stars" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/soldes-stars.jpg" alt="Soldes stars" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/soldes-stars.jpg" alt="Soldes stars" style="width:40%;"/>
                                        </div>
                                        <img src="<?php echo get_home_url(); ?>/img/popup-left.png" alt="Left" class="popup-left"/>
                                        <img src="<?php echo get_home_url(); ?>/img/popup-right.png" alt="Right" class="popup-right" />
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-popup" data-dismiss="modal">Retour aux thèmes</button>
                        <a href="<?php echo get_home_url(); ?>/commande/" class="btn btn-popup-blue">Commander</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            
            <div class="col-sm-4 bloc-kit show-fete-des-meres" style="display:none;">
                <p>KIT GRAPHIQUE BANDEAUX SOLDES</p>
                <a href="#" class="kit-link" style="position:relative; display: inline-block;"><img src="<?php echo get_home_url(); ?>/img/bandeaux-soldes.jpg" alt="Bandeaux soldes" class="thumbnail-kit"/><img src="<?php echo get_home_url(); ?>/img/loupe-kit.png" alt="Bandeaux soldes" class="loupe-kit" style="position:absolute; right:0; bottom:0; display:none; outline:none !important;"/></a>
                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index:9999;">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" >KIT GRAPHIQUE BANDEAUX SOLDES</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo get_home_url(); ?>/img/kit-popup.jpg" alt="Bandeaux soldes" />
                            </div>
                            <div class="col-md-6 popup-desc" >
                                <p class="popup-titre">Éléments graphiques du kit</p>
                                <p class="popup-prix">À partir de 99€</p>
                                <p class="popup-soustitre">Kit graphique pour la fête des mères</p>
                                <p class="popup-introliste">Le kit graphique comprend :</p>
                                <ul>
                                    <li>Un fond habillage fête des mères</li>
                                    <li>Une touche design sur votre logo</li>
                                    <li>Un design de slide fête des mères</li>
                                    <li>Vos fichiers livrés en PSD en 48h</li>
                                </ul>
                                <p class="popup-introliste">En option : </p>
                                <ul>
                                    <li>Intégration du kit graphique</li>
                                    <li>Design d'un slide supplémentaire</li>
                                    <li>Design bouton "ajouter au panier"</li>
                                    <li>Design vignettes produits</li>
                                    <li>Modification sur le kit (couleur, élément, etc.)</li>
                                </ul>
                            </div>
                            <div class="col-md-6 popup-couleur">
                                <div style="width:348px; margin:auto;">
                                    <img src="<?php echo get_home_url(); ?>/img/bandeaux-soldes.jpg" alt="Bandeaux soldes" />
                                    <div class="color-slider-wrap" style="position:relative;">
                                        <div class="color-slider" style="overflow:hidden; white-space:nowrap; margin-top:15px;">
                                            <img src="<?php echo get_home_url(); ?>/img/bandeaux-soldes.jpg" alt="Bandeaux soldes" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/bandeaux-soldes.jpg" alt="Bandeaux soldes" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/bandeaux-soldes.jpg" alt="Bandeaux soldes" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/bandeaux-soldes.jpg" alt="Bandeaux soldes" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/bandeaux-soldes.jpg" alt="Bandeaux soldes" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/bandeaux-soldes.jpg" alt="Bandeaux soldes" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/bandeaux-soldes.jpg" alt="Bandeaux soldes" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/bandeaux-soldes.jpg" alt="Bandeaux soldes" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/bandeaux-soldes.jpg" alt="Bandeaux soldes" style="width:40%;"/>
                                        </div>
                                        <img src="<?php echo get_home_url(); ?>/img/popup-left.png" alt="Left" class="popup-left"/>
                                        <img src="<?php echo get_home_url(); ?>/img/popup-right.png" alt="Right" class="popup-right" />
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-popup" data-dismiss="modal">Retour aux thèmes</button>
                        <a href="<?php echo get_home_url(); ?>/commande/" class="btn btn-popup-blue">Commander</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            
            <div class="col-sm-4 bloc-kit show-halloween" style="display:none;">
                <p>KIT GRAPHIQUE POLAROÏDES</p>
                <a href="#" class="kit-link" style="position:relative; display: inline-block;"><img src="<?php echo get_home_url(); ?>/img/polaroides.jpg" alt="Polaroïdes" class="thumbnail-kit"/><img src="<?php echo get_home_url(); ?>/img/loupe-kit.png" alt="Polaroïdes" class="loupe-kit" style="position:absolute; right:0; bottom:0; display:none; outline:none !important;"/></a>
                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index:9999;">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" >KIT GRAPHIQUE POLAROÏDES</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo get_home_url(); ?>/img/kit-popup.jpg" alt="Polaroïdes" />
                            </div>
                            <div class="col-md-6 popup-desc" >
                                <p class="popup-titre">Éléments graphiques du kit</p>
                                <p class="popup-prix">À partir de 99€</p>
                                <p class="popup-soustitre">Kit graphique pour Halloween</p>
                                <p class="popup-introliste">Le kit graphique comprend :</p>
                                <ul>
                                    <li>Un fond habillage Halloween</li>
                                    <li>Une touche design sur votre logo</li>
                                    <li>Un design de slide Halloween</li>
                                    <li>Vos fichiers livrés en PSD en 48h</li>
                                </ul>
                                <p class="popup-introliste">En option : </p>
                                <ul>
                                    <li>Intégration du kit graphique</li>
                                    <li>Design d'un slide supplémentaire</li>
                                    <li>Design bouton "ajouter au panier"</li>
                                    <li>Design vignettes produits</li>
                                    <li>Modification sur le kit (couleur, élément, etc.)</li>
                                </ul>
                            </div>
                            <div class="col-md-6 popup-couleur">
                                <div style="width:348px; margin:auto;">
                                    <img src="<?php echo get_home_url(); ?>/img/polaroides.jpg" alt="Polaroïdes" />
                                    <div class="color-slider-wrap" style="position:relative;">
                                        <div class="color-slider" style="overflow:hidden; white-space:nowrap; margin-top:15px;">
                                            <img src="<?php echo get_home_url(); ?>/img/polaroides.jpg" alt="Polaroïdes" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/polaroides.jpg" alt="Polaroïdes" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/polaroides.jpg" alt="Polaroïdes" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/polaroides.jpg" alt="Polaroïdes" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/polaroides.jpg" alt="Polaroïdes" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/polaroides.jpg" alt="Polaroïdes" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/polaroides.jpg" alt="Polaroïdes" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/polaroides.jpg" alt="Polaroïdes" style="width:40%;"/>
                                            <img src="<?php echo get_home_url(); ?>/img/polaroides.jpg" alt="Polaroïdes" style="width:40%;"/>
                                        </div>
                                        <img src="<?php echo get_home_url(); ?>/img/popup-left.png" alt="Left" class="popup-left"/>
                                        <img src="<?php echo get_home_url(); ?>/img/popup-right.png" alt="Right" class="popup-right" />
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-popup" data-dismiss="modal">Retour aux thèmes</button>
                        <a href="<?php echo get_home_url(); ?>/commande/" class="btn btn-popup-blue">Commander</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            </div>
        </div>
        
        <div class="galerieEmailing" style="display:none;">
            <div class="container" style="margin-top:25px; margin-bottom:50px;">
                    <p style="display:inline-block; font-size:35px; font-weight:600;" class="galerieChoixTitle">Soldes d'été</p>
                    <div class="galerie-choix-event">
                        <a href="#" class="services-bouton" data-filtre="show-noel-nouvel-an">Noël / Nouvel An</a>
                    </div>
                
                    <div class="galerie-choix-event">
                        <a href="#" class="services-bouton" data-filtre="show-soldes-dhiver">Soldes d'hiver</a>
                    </div>
                
                    <div class="galerie-choix-event">
                        <a href="#" class="services-bouton" data-filtre="show-saint-valentin">Saint-Valentin</a>
                    </div>
                
                    <div class="galerie-choix-event">
                        <a href="#" class="services-bouton" data-filtre="show-fete-des-meres">Fête des mères</a>
                    </div>
                
                    <div class="galerie-choix-event">
                        <a href="#" class="services-bouton-active" data-filtre="show-soldes-dete">Soldes d'été</a>
                    </div>
                
                    <div class="galerie-choix-event">
                        <a href="#" class="services-bouton" data-filtre="show-halloween">Halloween</a>
                    </div>
            </div>
            
            <div class="container liste-kit" style="padding:0;">
                <div class="show-soldes-dete bloc-kit">
                    <div class="col-sm-4">
                        <p>KIT GRAPHIQUE SHOPPING BAG</p>
                        <div class="kit-emailing">
                            <img src="<?php echo get_home_url(); ?>/img/galerie_emailing_1.jpg" alt="SHOPPING BAG" class="kit-emailing-pic"/>
                        </div>
                    </div>
            
                    <div class="col-sm-4" style="">
                        <p>KIT GRAPHIQUE BULLE CARRE</p>
                        <div class="kit-emailing">
                            <img src="<?php echo get_home_url(); ?>/img/galerie_emailing_2.jpg" alt="BULLE CARRE" class="kit-emailing-pic"/>
                        </div>
                    </div>
                    
                    <div class="col-sm-4"> 
                        <p>KIT GRAPHIQUE PASTILLES</p>
                        <div class="kit-emailing">
                            <img src="<?php echo get_home_url(); ?>/img/galerie_emailing_4.jpg" alt="PASTILLES" class="kit-emailing-pic"/>
                        </div>
                    </div>  
                </div>
                
                <div class="show-noel-nouvel-an bloc-kit" style="display:none;">
                    <div class="col-sm-4">
                        <p>KIT GRAPHIQUE SOLDES STARS</p>
                        <div class="kit-emailing">
                            <img src="<?php echo get_home_url(); ?>/img/galerie_emailing_1.jpg" alt="SOLDES STARS" class="kit-emailing-pic"/>
                        </div>
                    </div>
                </div>
                
                <div class="show-soldes-dhiver bloc-kit" style="display:none;">
                    <div class="col-sm-4">
                        <p>KIT GRAPHIQUE TEXTE</p>
                        <div class="kit-emailing">
                            <img src="<?php echo get_home_url(); ?>/img/galerie_emailing_5.jpg" alt="TEXTE" class="kit-emailing-pic"/>
                        </div>
                    </div>
                </div>
                
                <div class="show-saint-valentin bloc-kit" style="display:none;">
                    <div class="col-sm-4">
                        <p>KIT GRAPHIQUE LUMIÈRE</p>
                        <div class="kit-emailing">
                            <img src="<?php echo get_home_url(); ?>/img/galerie_emailing_3.jpg" alt="LUMIÈRE" class="kit-emailing-pic"/>
                        </div>
                    </div>
                </div>
                
                <div class="show-fete-des-meres bloc-kit" style="display:none;">
                    <div class="col-sm-4">
                        <p>KIT GRAPHIQUE BANDEAUX SOLDES</p>
                        <div class="kit-emailing">
                            <img src="<?php echo get_home_url(); ?>/img/galerie_emailing_1.jpg" alt="BANDEAUX SOLDES" class="kit-emailing-pic"/>
                        </div>
                    </div>
                </div>
                
                <div class="show-halloween bloc-kit" style="display:none;">
                    <div class="col-sm-4">
                        <p>KIT GRAPHIQUE POLAROÏDES</p>
                        <div class="kit-emailing">
                            <img src="<?php echo get_home_url(); ?>/img/galerie_emailing_3.jpg" alt="POLAROÏDES" class="kit-emailing-pic"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
    jQuery('.services-bouton, .services-bouton-active').click( function() { 
        var event = jQuery(this).attr("data-filtre");
        var eventTitle = jQuery(this).text();
        jQuery(this).parent().parent().parent().find(".services-bouton-active").attr("class", "services-bouton");
        jQuery(this).attr("class", "services-bouton-active");
        jQuery(this).parent().parent().parent().find(".bloc-kit").hide();
        jQuery(this).parent().parent().parent().find("."+event).show();
        jQuery(this).parent().parent().find(".galerieChoixTitle").text(eventTitle);
        return false;
    });
    jQuery( ".kit-link" ).hover(
      function() {
        jQuery( this ).find(".thumbnail-kit").css("outline", "3px solid #02a1f5");
        jQuery( this ).find(".loupe-kit").show();
      }, function() {
        jQuery( this ).find(".thumbnail-kit").css("outline", "1px solid lightgrey");
         jQuery( this ).find(".loupe-kit").hide();
      }
    );
    jQuery('.kit-link').click( function() { 
        jQuery(this).parent().find("div.modal").modal("show");
        return false;
    });
    jQuery("#showHabillage").click(function(e){
        e.preventDefault();
        jQuery(".galerieEmailing").hide();
        jQuery(".galerieHabillage").show();
        jQuery(".commande-menu-link").addClass("commande-menu-link-inactive");
        jQuery(this).removeClass("commande-menu-link-inactive");
        jQuery("#habillage-second").hide();
        jQuery("#habillage-first").show();
        jQuery("#etape-2").show();
        jQuery("#etape-3").hide();
        jQuery(".title-wrap h2").text("Galerie habillage évènementiel")
    });
        
    jQuery("#showEmailing").click(function(e){
        e.preventDefault();
        jQuery(".galerieHabillage").hide();
        jQuery(".galerieEmailing").show();
        jQuery(".commande-menu-link").addClass("commande-menu-link-inactive");
        jQuery(this).removeClass("commande-menu-link-inactive");
        jQuery(".title-wrap h2").text("Galerie E-mailing")
    });
    jQuery('.popup-right').click(function(){
        var elem = parseInt(jQuery(this).parent().find(".color-slider").css("width"));
        var margin = parseInt(jQuery(this).parent().find(".color-slider > :first-child").css('marginLeft'));
        var marginPercent = Math.floor(margin*100/elem);
        var nbelem = jQuery(this).parent().find(".color-slider > img").length;
        if(marginPercent <= ((nbelem - 2)*41*-1))
            return;
        else { 
            jQuery(this).parent().find(".color-slider > :first-child").css('marginLeft', (marginPercent - 41).toString()+"%");
        }
    });
    jQuery('.popup-left').click(function(){
        var elem = parseInt(jQuery(this).parent().find(".color-slider").css("width"));
        var margin = parseInt(jQuery(this).parent().find(".color-slider > :first-child").css('marginLeft'));
        var marginPercent = Math.floor(margin*100/elem);
        var nbelem = jQuery(this).parent().find(".color-slider > img").length;
        if(marginPercent >= 0){
            jQuery(this).parent().find(".color-slider > :first-child").css('marginLeft', 0);
            return;
        }
        else { 
            jQuery(this).parent().find(".color-slider > :first-child").css('marginLeft', (marginPercent + 41).toString()+"%");
        }
    });

    </script>
    
<?php get_footer(); ?>