<?php /* Template Name: Commande */ 
get_header(); ?>


    <div class="container-fluid container-title blue-title blue-title-medium" style="position:relative;">
        <div class="col-md-12 text-center title-wrap">
            <h2>Je commande mon habillage évènementiel</h2>
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
        
    <div class="container page-content">
        <div id="habillage-wrapper">
            <div class="row">
                <div class="col-md-9">
                    <p class="graphistes-work"><em>Nos graphistes adaptent l'un de nos design pour habiller votre site en vue du prochain évènement.</em></p>
                    <form id="formCommande" name="formCommande" action="<?php echo get_home_url(); ?>/valider-commande/" method="post" onsubmit="return validateForm();">
                        <input type="hidden" name="submitCommande">
                        <div id="habillage-first">
                            <p class="leading-dots-line"><span class="nombre-cercle">1</span><span class="titre-commande">Choisissez votre évènement</span> </p>
                            <div class="bloc-commande">
                                <div class="select-style">
                                    <select name="evenement" size="1" id="choix-event">
                                        <option selected>Soldes d'été
                                        <option>Soldes d'hiver
                                        <option>Saint-Valentin
                                        <option>Fête des mères
                                        <option>Halloween
                                        <option>Noël / Nouvel an
                                    </select>
                                </div>
                            </div>
                            
                             <p class="leading-dots-line"><span class="nombre-cercle">2</span><span class="titre-commande">Choisissez votre kit graphique</span> </p>
                            <div class="bloc-commande liste-kit">
                                <div class="col-sm-6 bloc-kit show-soldes-dete">
                                    <p><input type="radio" name="group1" value="Shopping bag" id="kit-shopping-bag" checked><label for="kit-shopping-bag"></label><span> KIT GRAPHIQUE SHOPPING BAG</span></p>
                                    <a href="#" class="kit-link" style="position:relative; display: inline-block;"><img src="<?php echo get_home_url(); ?>/img/shopping-bag.jpg" alt="Shopping bag" class="selected-kit thumbnail-kit"/><img src="<?php echo get_home_url(); ?>/img/loupe-kit.png" alt="Shopping bag" class="loupe-kit" style="position:absolute; right:0; bottom:0; display:none; outline:none !important;"/></a>
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
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 bloc-kit show-soldes-dete">
                                    <p><input type="radio" name="group1" value="Bulle carré" id="kit-bulle-carre"><label for="kit-bulle-carre"></label><span> KIT GRAPHIQUE BULLE CARRE</span></p>
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
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 bloc-kit show-saint-valentin" style="display:none;">
                                    <p><input type="radio" name="group1" value="Lumière" id="kit-lumiere"><label for="kit-lumiere"></label><span> KIT GRAPHIQUE LUMIÈRE</span></p>
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
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 bloc-kit show-soldes-dete">
                                    <p><input type="radio" name="group1" value="Pastilles" id="kit-pastilles"><label for="kit-pastilles"></label><span> KIT GRAPHIQUE PASTILLES</span></p>
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
                                                            <img src="<?php echo get_home_url(); ?>/img/popup-right.png" alt="Right" class="popup-right"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-popup" data-dismiss="modal">Retour aux thèmes</button>
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 bloc-kit show-soldes-dhiver" style="display:none;">
                                    <p><input type="radio" name="group1" value="Wonderful season" id="kit-wonderful-season"><label for="kit-wonderful-season"></label><span> KIT GRAPHIQUE WONDERFUL SEASON</span></p>
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
                                                            <img src="<?php echo get_home_url(); ?>/img/popup-right.png" alt="Right" class="popup-right"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-popup" data-dismiss="modal">Retour aux thèmes</button>
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 bloc-kit show-soldes-dhiver" style="display:none;">
                                    <p><input type="radio" name="group1" value="Texte" id="kit-texte"><label for="kit-texte"></label><span> KIT GRAPHIQUE TEXTE</span></p>
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
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 bloc-kit show-noel-nouvel-an" style="display:none;">
                                    <p><input type="radio" name="group1" value="Soldes stars" id="kit-soldes-stars"><label for="kit-soldes-stars"></label><span> KIT GRAPHIQUE SOLDES STARS</span></p>
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
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 bloc-kit show-fete-des-meres" style="display:none;">
                                    <p><input type="radio" name="group1" value="Bandeaux soldes" id="kit-bandeaux-soldes"><label for="kit-bandeaux-soldes"></label><span> KIT GRAPHIQUE BANDEAUX SOLDES</span></p>
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
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 bloc-kit show-halloween" style="display:none;">
                                    <p><input type="radio" name="group1" value="Polaroïdes" id="kit-polaroides"><label for="kit-polaroides"></label><span> KIT GRAPHIQUE POLAROÏDES</span></p>
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
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="habillage-second" style="display:none;">
                            <p class="leading-dots-line"><span class="nombre-cercle">3</span><span class="titre-commande">Choisissez votre formule</span> </p>
                            
                            <div class="row" style="padding: 15px 50px;">
                                <div class="col-md-6">
                                    <div class="text-center bloc-formule bloc-formule-selected" data-type="design">
                                        <p class="formule-title">Design</p>
                                        <p class="formule-desc">Votre habillage sur mesure<br>livré en 48h en fichiers PSD</p>
                                        <p class="formule-price"><span class="price">99</span><span class="euro-symbol">€</span></p>
                                        <img src="<?php echo get_home_url(); ?>/img/formule-selected.png" alt="selected"  class="img-formule-selected"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-center bloc-formule" data-type="designcode">
                                        <p class="formule-title">Design + code</p>
                                        <p class="formule-desc" style="margin-bottom: 30px;">Votre habillage sur mesure<br>livré en 48h en fichiers PSD<br><strong>ET</strong> intégré par nos développeurs experts</p>
                                        <p class="formule-price" style="padding:0px 10px;"><span class="price">159</span><span class="euro-symbol">€</span></p>
                                        <img src="<?php echo get_home_url(); ?>/img/formule-selected.png" alt="selected" class="img-formule-selected"/>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="formuleSelected" id="formuleSelected" value="design">
                            
                            <p class="leading-dots-line"><span class="nombre-cercle">4</span><span class="titre-commande">Options</span> </p>
                            
                            <div class="row" style="padding: 0px 30px 0px 50px;">
                                <div class="col-md-12">
                                    <ul class="leaders">
                                        <li class="leading-dots"><input type="checkbox" name="ajout-panier" value="on" id="ajout-panier" class="option-checkbox"><label for="ajout-panier"></label><span class="option-desc">Design du bouton "ajout au panier"</span> <span class="option-prix">15€</span></li>
                                        <li class="leading-dots"><input type="checkbox" name="vignette-produit" value="on" id="vignette-produit" class="option-checkbox"><label for="vignette-produit"></label><span class="option-desc">Design des vignettes produit</span> <span class="option-prix">10€</span></li>
                                        <li class="leading-dots hidden-textarea"><input type="checkbox" name="slide-supp" value="on" id="slide-supp" class="option-checkbox"><label for="slide-supp"></label><span class="option-desc">Création d'un slide supplémentaire sur mesure</span> <span class="option-prix">59€</span></li>
                                        <li class="option-desc"><textarea id="slide-supp-content" placeholder="Tapez ici le texte et une courte description de ce que vous souhaitez" style="width:100%; height:100px;"></textarea></li>
                                        <li class="leading-dots"><input type="checkbox" name="delai-express" value="on" id="delai-express" class="option-checkbox"><label for="delai-express"></label><span class="option-desc">Délai express 48h</span> <span class="option-prix">40€</span></li>
                                        <li class="livraison-express">
                                            <div class="row text-center">
                                                <div class="col-md-3 col-md-offset-3 col-livraison livraison-rapide"><p class="col-livraison-prix">+ 40€</p><p class="col-livraison-type col-livraison-type">EXPRESS 48H</p><p class="col-livraison-date col-livraison-date">Livré le blabla</p></div>
                                                <div class="col-md-3 col-livraison livraison-normale livraison-selected"><p class="col-livraison-prix">GRATUIT</p><p class="col-livraison-type col-livraison-type">NORMAL 5 JOURS</p><p class="col-livraison-date col-livraison-date">Livré le blabla bis</p></div>
                                            </div>
                                        </li>
                                        <li class="leading-dots"><input type="checkbox" name="emailing" value="on" id="emailing" class="option-checkbox"><label for="emailing"></label><span class="option-desc">E-mailing Opération soldes (prêt à envoyer)</span> <span class="option-prix">79€</span><span class="old-price">99€</span></li>
                                        <li class="leading-dots hidden-textarea"><input type="checkbox" name="modifications" value="on" id="modifications" class="option-checkbox"><label for="modifications"></label><span class="option-desc">Modifications sur le design</span> <span class="option-prix">39€</span></li>
                                        <li class="modifications-bloc">
                                            <div class="row" style="padding: 0px 30px 0px 45px;">
                                                <span style="font-size:15px; color:#777777; font-weight:600;">Nombre de modifications(s)</span>
                                                <div class="select-style">
                                                    <select name="nb-modifs" size="1" id="nb-modifs">
                                                        <option value="1" selected>1
                                                        <option value="2">2
                                                        <option value="3">3
                                                        <option value="4">4
                                                        <option value="5">5
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modifications-container">
                                                <textarea id="modif-text-1" placeholder="Vous savez déjà la modification n°1 que vous souhaitez effectuer ?" class="modification-textarea" style="width:100%; height:100px;"></textarea>
                                                <textarea id="modif-text-2" placeholder="Vous savez déjà la modification n°2 que vous souhaitez effectuer ?" class="modification-textarea" style="width:100%; height:100px; display:none;"></textarea>
                                                <textarea id="modif-text-3" placeholder="Vous savez déjà la modification n°3 que vous souhaitez effectuer ?" class="modification-textarea" style="width:100%; height:100px; display:none;"></textarea>
                                                <textarea id="modif-text-4" placeholder="Vous savez déjà la modification n°4 que vous souhaitez effectuer ?" class="modification-textarea" style="width:100%; height:100px; display:none;"></textarea>
                                                <textarea id="modif-text-5" placeholder="Vous savez déjà la modification n°5 que vous souhaitez effectuer ?" class="modification-textarea" style="width:100%; height:100px; display:none;"></textarea>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                            
                            <p class="leading-dots-line" style="margin-bottom:20px;"><span class="nombre-cercle">5</span><span class="titre-commande">Vos informations</span> </p>
                            
                            <div class="row" style="padding: 0px 30px 0px 50px;">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nom" placeholder="Nom*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Email*">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="comment" placeholder="Votre commentaire ici" style="height: 100px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>
                
                <div class="col-md-3">
                    <div class="bloc-panier">
                        <div class="text-center panier-header">
                            <img src="<?php echo get_home_url(); ?>/img/habillage.png" alt="Habillage" style="height:100px;"/>
                            <p>Habillage évènementiel<br><span class="panier-event">Soldes d'été</span></p>
                        </div>
                        <div class="panier-content">
                            <p class="panier-design">Design <span class="price">99€</span></p>
                            <p class="panier-kit">Kit graphique shopping bag</p>
                            <ul class="panier-options">
                    
                            </ul>
                            <p class="panier-total">Montant total <span class="price">99€</span></p>
                            <button type="button" id="etape-2" class="panier-button">étape suivante :<br>choisir mes options</button>
                            <button type="button" id="etape-3" class="panier-button" style="display:none;">Finaliser ma commande</button>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        
        <div id="relooking-wrapper" style="display:none;">
            <div class="row">
                <div class="col-lg-9">
                    <p class="graphistes-work"><em>Nos graphistes repensent totalement le design de votre site pour une ergonomie plus efficace et un look plus moderne.</em></p>
                    <form id="formRelooking" name="formRelooking" action="<?php echo get_home_url(); ?>/valider-commande/" method="post" onsubmit="return validateFormR();">
                        <input type="hidden" name="submitRelooking">
                        <div id="relooking-first">
                            <p class="leading-dots-line"><span class="nombre-cercle">1</span><span class="titre-commande">Relooking total</span> </p>
                             <div class="row" style="padding: 15px 50px;">
                                <div class="col-md-12">
                                    <div class="bloc-formule bloc-formule-selected bloc-formule-relooking">
                                        <div class="row">
                                            <div class="col-md-6 text-center formule-relooking-container">
                                                <p class="formule-relooking-name">Relooking total </p>
                                                <p class="formule-relooking-price">499€</p>
                                            </div>
                                            <div class="col-md-6 bloc-formule-relooking-desc">
                                                <p>Design PSD de <strong>3 pages</strong> de votre site : <br>
                                                    <span style="margin-top:5px;">- Page accueil</span><br>
                                                    <span>- Page catégorie</span><br>
                                                    <span style="margin-bottom:5px;">- Page produit</span><br>
                                                    Payez <strong>50%</strong> à la commande puis le solde lors de la livraison conforme de vos fichiers.
                                                </p>
                                            </div>
                                        </div>
                                        <img src="<?php echo get_home_url(); ?>/img/formule-selected.png" alt="selected"  class="img-formule-selected"/>
                                    </div>
                                </div>
                            </div>
                            
                            <p class="leading-dots-line"><span class="nombre-cercle">2</span><span class="titre-commande">Options</span> </p>
                            
                            <div class="row" style="padding: 0px 30px 0px 50px;">
                                <div class="col-md-12">
                                    <ul class="leaders">
                                        <li class="leading-dots"><input type="checkbox" name="keep-structure" value="on" id="keep-structure" class="option-checkbox"><label for="keep-structure"></label><span class="option-desc">Conserver la structure de votre site pour faciliter l'intégration</span> <span class="option-prix">15€</span></li>
                                        <li class="leading-dots hidden-textarea"><input type="checkbox" name="refonte-logo" value="on" id="refonte-logo" class="option-checkbox"><label for="refonte-logo"></label><span class="option-desc">Refonte de votre logo</span> <span class="option-prix">75€</span></li>
                                        <li class="option-desc"><textarea id="refonte-logo-content" placeholder="Tapez ici le texte et une courte description de ce que vous souhaitez" style="width:100%; height:100px;"></textarea></li>
                                        <li class="leading-dots"><input type="checkbox" name="design-menu-dyn" value="on" id="design-menu-dyn" class="option-checkbox"><label for="design-menu-dyn"></label><span class="option-desc">Design du menu dynamique</span> <span class="option-prix">29€</span></li>
                                        <li class="leading-dots hidden-textarea"><input type="checkbox" name="slide-supp-r" value="on" id="slide-supp-r" class="option-checkbox"><label for="slide-supp-r"></label><span class="option-desc">Création d'un slide supplémentaire sur mesure</span> <span class="option-prix">59€</span></li>
                                        <li class="option-desc"><textarea id="slide-supp-r-content" placeholder="Tapez ici le texte et une courte description de ce que vous souhaitez" style="width:100%; height:100px;"></textarea></li>
                                        <li class="leading-dots"><input type="checkbox" name="delai-express-r" value="on" id="delai-express-r" class="option-checkbox"><label for="delai-express-r"></label><span class="option-desc">Délai express 7 jours</span> <span class="option-prix">79€</span></li>
                                        <li class="livraison-express">
                                            <div class="row text-center">
                                                <div class="col-md-3 col-md-offset-3 col-livraison livraison-rapide"><p class="col-livraison-prix">+ 79€</p><p class="col-livraison-type col-livraison-type-express">EXPRESS 7 JOURS</p><p class="col-livraison-date col-livraison-date-express">Livré le blabla</p></div>
                                                <div class="col-md-3 col-livraison livraison-normale livraison-selected"><p class="col-livraison-prix">GRATUIT</p><p class="col-livraison-type col-livraison-type-normal">NORMAL 15 JOURS</p><p class="col-livraison-date col-livraison-date-normal">Livré le blabla bis</p></div>
                                            </div>
                                        </li>
                                        <li class="leading-dots"><input type="checkbox" name="briefing-tel" value="on" id="briefing-tel" class="option-checkbox"><label for="briefing-tel"></label><span class="option-desc">1 HEURE de briefing téléphonique avec notre Directeur Artistique <br>OFFERT si votre commande atteint 800€</span> <span class="option-prix">99€</span></li>
                                        <li class="leading-dots hidden-textarea"><input type="checkbox" name="modifications-r" value="on" id="modifications-r" class="option-checkbox"><label for="modifications-r"></label><span class="option-desc">Modifications sur le design</span> <span class="option-prix">39€</span></li>
                                        <li class="modifications-bloc">
                                            <div class="row" style="padding: 0px 30px 0px 45px;">
                                                <span style="font-size:15px; color:#777777; font-weight:600;">Nombre de modifications(s)</span>
                                                <div class="select-style">
                                                    <select name="nb-modifs-r" size="1" id="nb-modifs-r">
                                                        <option value="1" selected>1
                                                        <option value="2">2
                                                        <option value="3">3
                                                        <option value="4">4
                                                        <option value="5">5
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modifications-container">
                                                <textarea id="modif-text-r-1" placeholder="Vous savez déjà la modification n°1 que vous souhaitez effectuer ?" class="modification-textarea" style="width:100%; height:100px;"></textarea>
                                                <textarea id="modif-text-r-2" placeholder="Vous savez déjà la modification n°2 que vous souhaitez effectuer ?" class="modification-textarea" style="width:100%; height:100px; display:none;"></textarea>
                                                <textarea id="modif-text-r-3" placeholder="Vous savez déjà la modification n°3 que vous souhaitez effectuer ?" class="modification-textarea" style="width:100%; height:100px; display:none;"></textarea>
                                                <textarea id="modif-text-r-4" placeholder="Vous savez déjà la modification n°4 que vous souhaitez effectuer ?" class="modification-textarea" style="width:100%; height:100px; display:none;"></textarea>
                                                <textarea id="modif-text-r-5" placeholder="Vous savez déjà la modification n°5 que vous souhaitez effectuer ?" class="modification-textarea" style="width:100%; height:100px; display:none;"></textarea>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <p class="leading-dots-line" style="margin-bottom:20px;"><span class="nombre-cercle">3</span><span class="titre-commande">Vos informations</span> </p>
                            
                            <div class="row" style="padding: 0px 30px 0px 50px;">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nom-r" placeholder="Nom*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email-r" placeholder="Email*">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="comment-r" placeholder="Votre commentaire ici" style="height: 100px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="relooking-second" style="display:none;">
                            <p class="leading-dots-line"><span class="nombre-cercle">4</span><span class="titre-commande">Votre briefing</span> </p>
                            
                            <div class="row" style="padding: 0px 30px 0px 50px;">
                                <div class="col-md-12 briefContainer">
                                    <p class="briefTitle">3 sites que vous aimez</p>
                                    <input type="text" style="width:100%;" name="site-like-1" class="inputBrief" placeholder="http://">
                                    <input type="text" style="width:100%;" name="site-like-2" class="inputBrief" placeholder="http://">
                                    <input type="text" style="width:100%;" name="site-like-3" class="inputBrief" placeholder="http://">
                                    
                                    <p class="briefTitle">3 sites que vous n'aimez pas</p>
                                    <input type="text" style="width:100%;" name="site-dislike-1" class="inputBrief" placeholder="http://">
                                    <input type="text" style="width:100%;" name="site-dislike-2" class="inputBrief" placeholder="http://">
                                    <input type="text" style="width:100%;" name="site-dislike-3" class="inputBrief" placeholder="http://">
                                    
                                    <p class="briefTitle">Qu'est-ce qu'un bon design pour vous ?</p>
                                    <textarea placeholder="Tapez ici le texte et une courte description" class="textareaBrief" style="width:100%; height:100px;" name="bon-design"></textarea>
                                    
                                    <p class="briefTitle">Qu'est-ce que vous n'aimez pas du tout sur un site internet ?</p>
                                    <textarea placeholder="Tapez ici le texte et une courte description" class="textareaBrief" style="width:100%; height:100px;" name="mauvais-design"></textarea>
                                    
                                    <p class="briefTitle">Donnez-nous ici vos commentaires supplémentaires</p>
                                    <textarea placeholder="Tapez ici le texte et une courte description" class="textareaBrief" style="width:100%; height:100px;" name="commentaires-supp"></textarea>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                    
                </div>
                
                <div class="col-lg-3">
                    <div class="bloc-panier">
                        <div class="text-center panier-header">
                            <img src="<?php echo get_home_url(); ?>/img/relooking.png" alt="Relooking total" style="height:100px;"/>
                            <p>Relooking total</p>
                        </div>
                        <div class="panier-content">
                            <ul class="panier-options">
                    
                            </ul>
                            <p class="panier-total">Montant total <span class="price">499€</span></p>
                            <p class="panier-total-twotimes">Payez 50%<br>à la commande <span class="price">249.5€</span></p>
                            <button type="button" id="etape-2-r" class="panier-button">étape suivante :<br>votre brief en détail</button>
                            <button type="button" id="etape-3-r" class="panier-button" style="display:none;">Finaliser ma commande</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        jQuery(window).scroll(function(){
            var scrolltop = jQuery(window).scrollTop();
            var postop = 0;
            var footer = jQuery("#footer-v1").offset();
            if(scrolltop > 255)
                postop = scrolltop - 255;
            jQuery(".bloc-panier").css("top", postop);
            if(jQuery("#habillage-wrapper").is(":visible")){
                var posbottom = jQuery(".bloc-panier:first").offset().top + jQuery(".bloc-panier:first").height();
                if(posbottom > footer.top){
                    jQuery(".bloc-panier").css("top", postop - (posbottom - footer.top) - 25);
                }
            }
            else{
                var posbottom = jQuery(".bloc-panier").eq(1).offset().top + jQuery(".bloc-panier").eq(1).height();
                if(posbottom > footer.top){
                    jQuery(".bloc-panier").css("top", postop - (posbottom - footer.top) - 25);
                }
            }
        });
        jQuery("#showHabillage").click(function(evt){
            evt.preventDefault();
            jQuery("#relooking-wrapper").hide();
            jQuery("#habillage-wrapper").show();
            jQuery(".commande-menu-link").addClass("commande-menu-link-inactive");
            jQuery(this).removeClass("commande-menu-link-inactive");
            jQuery("#habillage-second").hide();
            jQuery("#habillage-first").show();
            jQuery("#etape-3").hide();
            jQuery("#etape-2").show();
            jQuery(".title-wrap h2").text("Je commande mon habillage évènementiel")
        });
        
        jQuery("#showRelooking").click(function(evt){
            evt.preventDefault();
            jQuery("#habillage-wrapper").hide();
            jQuery("#relooking-wrapper").show();
            jQuery(".commande-menu-link").addClass("commande-menu-link-inactive");
            jQuery(this).removeClass("commande-menu-link-inactive");
            jQuery("#relooking-second").hide();
            jQuery("#relooking-first").show(); 
            jQuery("#etape-3-r").hide();
            jQuery("#etape-2-r").show();
            jQuery(".title-wrap h2").text("Je commande un relooking total")
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
        jQuery(".liste-kit input[type='radio']").click(function(){
          jQuery(".liste-kit .thumbnail-kit").removeClass("selected-kit");
          jQuery(this).parent().parent().find(".thumbnail-kit").addClass("selected-kit");
          jQuery("#habillage-wrapper .panier-kit").text(jQuery(this).parent().find("span").text());
        });

        jQuery("#choix-event").on('change', function() {
          jQuery("#habillage-wrapper .panier-event").text(this.value);
          var val = this.value;
          val = val.toLowerCase().replace(" /", "").replace(/ /g, "-").replace("'", "").replace(/[èéêë]/g,"e");
          jQuery(".bloc-kit").hide();
          jQuery(".show-"+val).show();
          jQuery(".show-"+val+":first").find("input").trigger("click");
        });
        
        jQuery("#etape-2").click( function(){
            jQuery("#habillage-first").hide();
            jQuery("#habillage-second").show();
            jQuery("#etape-2").hide();
            jQuery("#etape-3").show();
        });
        
        jQuery("#etape-3").click(function(){
           jQuery("#formCommande").submit();
        });
        
        jQuery("#etape-2-r").click( function(){
            jQuery("#relooking-first").hide();
            jQuery("#relooking-second").show();
            jQuery("#etape-2-r").hide();
            jQuery("#etape-3-r").show();
        });
        
        jQuery("#etape-3-r").click(function(){
           jQuery("#formRelooking").submit();
        });
        
        jQuery("#habillage-wrapper .bloc-formule").click( function(){
            jQuery("#habillage-wrapper .bloc-formule-selected").removeClass("bloc-formule-selected");
            jQuery(this).addClass("bloc-formule-selected");
            var price = 0;
            var type = "";
            if(jQuery(this).attr("data-type") == "design"){
                price = 99;
                type = "Design";
                jQuery("#formuleSelected").val("design");
            }   
            else {
                price = 159;
                type = "Design + code";
                jQuery("#formuleSelected").val("designcode");
            }
            jQuery("#habillage-wrapper .panier-design").html(type+"<span class='price'>"+price.toString()+"€</span>");
            calculatePrice();
        });
        
        function calculatePrice(){
            var tmp = parseInt(jQuery("#habillage-wrapper .panier-design").find(".price").text());
            jQuery("#habillage-wrapper .panier-options li").each(function(){
                tmp += parseInt(jQuery(this).find(".panier-options-prix").text());
            });
            jQuery("#habillage-wrapper .panier-total").find(".price").text(tmp.toString()+"€");
        }
        
        function calculatePriceR(){
            var tmp = 499;
            jQuery("#relooking-wrapper .panier-options li").each(function(){
                tmp += parseInt(jQuery(this).find(".panier-options-prix").text());
            });
            jQuery("#relooking-wrapper .panier-total").find(".price").text(tmp.toString()+"€");
            jQuery("#relooking-wrapper .panier-total-twotimes").find(".price").text((tmp/2).toString()+"€");
        }
        
        jQuery("#habillage-wrapper .option-checkbox").change(function() {
            if(this.checked) {
                var nbModifs = parseInt(jQuery('#habillage-wrapper #nb-modifs').val());
                if(jQuery(this).attr("id") == "delai-express"){
                    jQuery(this).parent().parent().find(".livraison-normale").removeClass("livraison-selected");
                    jQuery(this).parent().parent().find(".livraison-rapide").addClass("livraison-selected");
                }
                if(jQuery(this).attr("id") == "modifications"){
                    var price = nbModifs * 39;
                    jQuery("#habillage-wrapper .panier-options").append('<li class="panier-options-ligne" id="'+jQuery(this).attr("id")+"-panier"+'""><span class="panier-options-desc">+ '+jQuery(this).parent().find(".option-desc").text()+' x'+nbModifs.toString()+'</span><span class="panier-options-prix">'+price.toString()+'€</span><a href="#" class="supp-option" ><img src="https://www.123rf.com/images/myaccount_cross.png" alt="Supprimer" class="panier-options-supp"/></a></li>');
                }
                else{
                    jQuery("#habillage-wrapper .panier-options").append('<li class="panier-options-ligne" id="'+jQuery(this).attr("id")+"-panier"+'""><span class="panier-options-desc">+ '+jQuery(this).parent().find(".option-desc").text()+'</span><span class="panier-options-prix">'+jQuery(this).parent().find(".option-prix").text()+'</span><a href="#" class="supp-option" ><img src="https://www.123rf.com/images/myaccount_cross.png" alt="Supprimer" class="panier-options-supp"/></a></li>');
                }
                if(jQuery(this).parent().hasClass("hidden-textarea")){
                    jQuery(this).parent().next().show(); 
                }
            }
            else{
                jQuery("#"+jQuery(this).attr("id")+"-panier").remove();
                if(jQuery(this).parent().hasClass("hidden-textarea")){
                    jQuery(this).parent().next().hide(); 
                }
                if(jQuery(this).attr("id") == "delai-express"){
                    jQuery(this).parent().parent().find(".livraison-rapide").removeClass("livraison-selected");
                    jQuery(this).parent().parent().find(".livraison-normale").addClass("livraison-selected");
                }
            }
            calculatePrice();
        });
        
        jQuery("#relooking-wrapper .option-checkbox").change(function() {
            if(this.checked) {
                var nbModifs = parseInt(jQuery('#relooking-wrapper #nb-modifs-r').val());
                if(jQuery(this).attr("id") == "delai-express-r"){
                    jQuery(this).parent().parent().find(".livraison-normale").removeClass("livraison-selected");
                    jQuery(this).parent().parent().find(".livraison-rapide").addClass("livraison-selected");
                }
                if(jQuery(this).attr("id") == "modifications-r"){
                    var price = nbModifs * 39;
                    jQuery("#relooking-wrapper .panier-options").append('<li class="panier-options-ligne" id="'+jQuery(this).attr("id")+"-panier"+'""><span class="panier-options-desc">+ '+jQuery(this).parent().find(".option-desc").text()+' x'+nbModifs.toString()+'</span><span class="panier-options-prix">'+price.toString()+'€</span><a href="#" class="supp-option" ><img src="https://www.123rf.com/images/myaccount_cross.png" alt="Supprimer" class="panier-options-supp"/></a></li>');
                }
                else{
                    jQuery("#relooking-wrapper .panier-options").append('<li class="panier-options-ligne" id="'+jQuery(this).attr("id")+"-panier"+'""><span class="panier-options-desc">+ '+jQuery(this).parent().find(".option-desc").text()+'</span><span class="panier-options-prix">'+jQuery(this).parent().find(".option-prix").text()+'</span><a href="#" class="supp-option" ><img src="https://www.123rf.com/images/myaccount_cross.png" alt="Supprimer" class="panier-options-supp"/></a></li>');
                }
                if(jQuery(this).parent().hasClass("hidden-textarea")){
                    jQuery(this).parent().next().show(); 
                }
            }
            else{
                jQuery("#"+jQuery(this).attr("id")+"-panier").remove();
                if(jQuery(this).parent().hasClass("hidden-textarea")){
                    jQuery(this).parent().next().hide(); 
                }
                if(jQuery(this).attr("id") == "delai-express-r"){
                    jQuery(this).parent().parent().find(".livraison-rapide").removeClass("livraison-selected");
                    jQuery(this).parent().parent().find(".livraison-normale").addClass("livraison-selected");
                }
            }
            calculatePriceR();
        });
        
        jQuery(document.body).on('click', '.supp-option' ,function(){
            jQuery("#"+jQuery(this).parent().attr("id").slice(0,-7)).trigger("click");
            return false;
        });
        
        jQuery('#habillage-wrapper #nb-modifs').on('change', function() {
            var nbModifs = parseInt(jQuery(this).val());
            var price = nbModifs * 39;
            jQuery("#habillage-wrapper .modification-textarea").hide();
            for(var i = 1; i <= nbModifs; i++){
                jQuery("#modif-text-"+i.toString()).show();
            }
            jQuery("#habillage-wrapper #modifications-panier").find(".panier-options-desc").text("+ Modifications sur le design x"+nbModifs.toString());
            jQuery("#habillage-wrapper #modifications-panier").find(".panier-options-prix").text(price.toString()+"€");
            calculatePrice();
        });
        
        jQuery('#relooking-wrapper #nb-modifs-r').on('change', function() {
            var nbModifs = parseInt(jQuery(this).val());
            var price = nbModifs * 39;
            jQuery("#relooking-wrapper .modification-textarea").hide();
            for(var i = 1; i <= nbModifs; i++){
                jQuery("#modif-text-r-"+i.toString()).show();
            }
            jQuery("#relooking-wrapper #modifications-r-panier").find(".panier-options-desc").text("+ Modifications sur le design x"+nbModifs.toString());
            jQuery("#relooking-wrapper #modifications-r-panier").find(".panier-options-prix").text(price.toString()+"€");
            calculatePriceR();
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
        
        function validateForm() {
            var nom = document.forms["formCommande"]["nom"].value;
            var email = document.forms["formCommande"]["email"].value;
            var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            if (nom == null || nom == "") {
                alert("Veuillez entrer votre nom");
                return false;
            }
            if (email == null || email == "" || !re.test(email)) {
                alert("Veuillez entrer un email valide");
                return false;
            }
            return true;     
        }
        
        function validateFormR() {
            var nom = document.forms["formRelooking"]["nom-r"].value;
            var email = document.forms["formRelooking"]["email-r"].value;
            var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            if (nom == null || nom == "") {
                alert("Veuillez entrer votre nom");
                jQuery("#relooking-second").hide();
                jQuery("#relooking-first").show(); 
                jQuery("#etape-2-r").show();
                jQuery("#etape-3-r").hide();
                return false;
            }
            if (email == null || email == "" || !re.test(email)) {
                alert("Veuillez entrer un email valide");
                jQuery("#relooking-second").hide();
                jQuery("#relooking-first").show(); 
                jQuery("#etape-2-r").show();
                jQuery("#etape-3-r").hide();
                return false;
            }
            return true;     
        }
    </script>
    
<?php get_footer(); ?>