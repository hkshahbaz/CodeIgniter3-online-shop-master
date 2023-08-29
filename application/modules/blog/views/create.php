

<h1><?=$headline ?></h1>
<?= validation_errors("<p style='color: red;'>","</p>") ?>


<?php 
if(isset($flash)){
	echo $flash;
}



		?>


<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Details du Blog</h2>
						<div class="box-icon">
							
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<?php
$form_location=base_url()."blog/create/".$update_id;

						?>
						<form class="form-horizontal" method="post" action="<?=$form_location?>">
						  <fieldset>

<div class="control-group">
							  <label class="control-label" for="typeahead">Date publié</label>
							  <div class="controls">
								<input type="text" name="date_publication" class="input-xlarge datepicker" id="date01" value="<?= $date_publication ?>">
							
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Titre </label>
							  <div class="controls">
								<input type="text" class="span6" name="titre_page" value="<?= $titre_page ?>">
							
							  </div>
							</div>
									<div class="control-group hidden-phone">
							  <label class="control-label" >Mots clé</label>
							  <div class="controls">
							  	<textarea class="span6" rows="9" id="textarea2"  name="motcle_page"><?php echo $motcle_page;

								?></textarea>

								
							  </div>
							</div>



			<div class="control-group hidden-phone">
							  <label class="control-label" >Description du Blog</label>
							  <div class="controls">
							  	<textarea class="span6" rows="9" id="textarea2"  name="description_page"><?php echo $description_page;

								?></textarea>

								
							  </div>
							</div>



					<div class="control-group hidden-phone">
							  <label class="control-label" >Contenu du Blog</label>
							  <div class="controls">
							  	<textarea class="span6" rows="9" id="textarea2"  name="contenu_page"><?php echo $contenu_page;

								?></textarea>

								
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Auteur</label>
							  <div class="controls">
								<input type="text" class="span6" name="auteur" value="<?= $auteur ?>">
							
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="submit" value="Submit">Valider</button>
							  <button type="submit" class="btn" name="submit" value="Cancel">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
<?php

if (is_numeric($update_id)) {?>


<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Plus d'options</h2>
						<div class="box-icon">
							
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">

<?php
if($image =="") {?>

  <a href="<?= base_url() ?>blog/upload_image/<?= $update_id ?>"><button type="button" class="btn btn-primary">Importer l'image de l'article</button></a>
 <?php

}else {
?>
<a href="<?= base_url() ?>blog/delete_image/<?= $update_id ?>"><button type="button" class="btn btn-danger">Supprimer l'image de l'article</button></a>
<?php

}

if($update_id>2) {
	?>

  <a href="<?= base_url() ?>blog/deleteconf/<?= $update_id ?>"><button type="button" class="btn btn-danger">Supprimer l'article</button></a>
<?php
}
?>
<a href="<?=base_url() ?>blog/view/<?= $update_id ?>"><button type="button" class="btn btn-success">Voir l'article</button></a>
					</div>
				</div><!--/span-->

			</div><!--/row-->

			<?php
		}

if($image !="") {?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>L'image du Blog</h2>
						<div class="box-icon">
							
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
  <img src="<?= base_url() ?>blog_pics/<?= $image ?> " >
				</div><!--/span-->

			</div><!--/row-->

			<?php
		}
		?>

		