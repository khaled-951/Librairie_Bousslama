<?php 
session_start();

include "../core/categorieC.php";
include "../core/produitC.php";
include "../core/wishlistC.php";
$categorieC =new categorieC();
$listeCategorieC=$categorieC->afficherCategorie();   
$produitC =new ProduitC();
$listeProduit=$produitC->afficherProduit(); 
$wishC =new wishlistC();
$wosh=$wishC->Viewwishlist((int)$_SESSION['user_id']); 
var_dump($wosh);
?>
	<div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Unfilled Orders</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>nom</th>
                                            <th>prix</th>
                                            <th>Quantité</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty($wosh)){ 
                                    foreach($wosh as $w){ ?>
		                            <tr>
                                    <td><?php echo $w['nom']; ?></td>
                                    <td><?php echo $w['prix']; ?></td>
                                    <td><?php echo $w['quantite']; ?></td>
                                    </tr>
	                                    <?php	}	}else{ ?><p>No products were added to the wishlist</p>
	                                    <?php }?>
                                        
								
									}}
									?>
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
						
						<a href="?Delete_All=1" ><button type="button">Delete All </button></a>
						
						
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>
        </div>
    </div><!-- .animated -->
</div>

<?php
	require 'Footer.php' ;
?>