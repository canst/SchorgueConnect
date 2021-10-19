<?php include('header.php')?>

	<!--====== FAQ ==========-->
	<section>
		<div class="form form-spac rows">
			<div class="container">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title col-md-12">
					<h2>Avez-vous <span>Questions</span> ou <span>Suggestions</span> ?</h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>Vous pouvez nous joindre en nous laissant un message. Mais sachez que nous réagirons plus vite par appel téléphonique.</p>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 form_1 faq-form wow fadeInLeft" data-wow-duration="1s">
					<!--====== THANK YOU MESSAGE ==========-->
					<form class="contact__form v2-search-form" method="post" action="mail/faq.php">
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								Thank you message
							</div>
						<ul>
							<li>
								<input type="text" name="name" value="" placeholder="Nom" required> </li>
							<li>
								<input type="tel" name="phone" value="" placeholder="Téléphone" required> </li>
							<li>
								 </li>
							<li>
								 </li>
							<li>
								<input type="text" name="ecount" value="" placeholder="Sujet" required> </li>
							<li>
								<textarea name="emess" cols="40" rows="3" placeholder="Enter your message"></textarea>
							</li>
							<li>
								<input type="submit" value="Envoyer" id="send_button"> </li>
						</ul>
					</form>
				</div>
				<!--====== COMMON NOTICE ==========-->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1s">
					<div class="rows book_poly">
						<h3>Comment nous joindre?</h3>
						<p>Nous sommes ouvert du Lundi au Samedi</p>
						<ul>
							<li>Les cours se deroulent de 7h à 15h30.</li>
							<li>Sécrétariat/Comptabilité : <strong>58256125</strong></li>
							<li>Conseiller : <strong>65542457</strong></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>







	<!--<script src="js/mail.js"></script>-->















	<?php include('footer.php')?>