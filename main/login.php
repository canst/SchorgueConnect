
<?php include('header.php')?>
    <!--END HEADER SECTION-->

    <!--== BODY CONTNAINER ==-->

		
	<!--DASHBOARD-->
	<section>
		<div class="tr-register" style="background-image: none;">
			<div class="tr-regi-form">
				<h4>Se connecter</h4>
				<form class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<input type="text" class="validate">
							<label>Nom d'utilisateur</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="password" class="validate">
							<label>Mot de passe</label>
						</div>
					</div>
                    <div>
                        <input type="checkbox" class="validate">
						<label>Se souvenir de moi</label>
                    </div>
					<div class="row">
						<div class="input-field col s12">
							<input type="submit" value="Connexion" class="waves-effect waves-light btn-large full-btn"> </div>
					</div>
				</form>
				<p><a href="forgot-pass.html">Mot de passe oublié ?</a> | Etes-vous un nouvel utilisateur  ? <a href="register.html">S'enregistrer</a>
				</p>
				<!-- <div class="soc-login">
					<h4>Se connecter en utilisant</h4>
					<ul>
						<li><a href="#"><i class="fa fa-facebook fb1"></i> Facebook</a> </li>
						<li><a href="#"><i class="fa fa-twitter tw1"></i> Twitter</a> </li>
						<li><a href="#"><i class="fa fa-google-plus gp1"></i> Google</a> </li>
					</ul>
				</div> -->
			</div>
		</div>
	</section>
	<!--END DASHBOARD-->
	<?php include('footer.php')?>