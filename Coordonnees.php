<main class="container pt-3 ">
	<h1 class="text-center text-dark">
		Coordonnées
	</h1>
	<hr>

	<div class="row">
		<div class="col">
			<div class="card mb-3">
				<div class="row g-0">
					<div class="col-md-1">
						<img src="./photos/logoSALAC.png" class="img-fluid rounded-start m-1" style="max-height: 8em" alt="logo">
					</div>
					<div class="col-md-4 align-self-center">
						<div class="card-body ">
							<h4 class="card-title">
								SA LAC
							</h4>
							<p class="card-text">
								38 rue de la rivière bruyante
								<br>29150 CHATEAULIN
							</p>
						</div>
					</div>
					<div class="col-md-4 align-self-center">
						<div class="card-body border-start">
							<h6 class="card-subtitle text-muted pb-4">
								<i class="bi bi-telephone-fill text-success"></i>
								+33 298 865 8900
							</h6>
							<h6 class="card-subtitle text-muted ">
								<i class="bi bi-envelope-fill text-success"></i>
								<a  class="text-muted text-decoration-none" href="mailto:contact@salac2024.bzh">contact@salac2024.bzh</a>
							</h6>
						</div>
					</div>
					<div class="col-md-3 align-self-center">
						<div class="card-body border-start">
							<h6 class="card-subtitle text-muted pb-3">
								<i class="bi bi-twitter text-info"></i>
								@salac2022
							</h6>
							<h6 class="card-subtitle text-muted pb-3">
								<i class="bi bi-facebook text-primary"></i>
								salac2022
							</h6>
							<h6 class="card-subtitle text-muted ">
								<i class="bi bi-instagram text-danger"></i>
								@salac2022
							</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<h3 class="text-primary p-2 mb-0 mt-1">Informations complémentaires</h3>
	<form class="bg-secondary bg-opacity-10 p-3 mb-4">
		<div class="row">
			<div class="col">
				<label for="Nom" class="form-label text-primary">Nom </label>
				<input id="Nom" type="text" class="form-control">
			</div>
			<div class="col">
				<label for="Prenom" class="form-label  text-primary">Prenom</label>
				<input id="Prenom" type="text" class="form-control">
			</div>
		</div>
		<div class="row mt-3">
			<div class="col">
				<label for="email" class="form-label  text-primary">Email</label>
				<input id="email" type="email" class="form-control">
			</div>
		</div>
		<div class="row mt-3">
			<div class="col">
				<label for="lstDoc" class="form-label text-primary">Vous désirez de la documentation sur :</label>
				<select name="" id="lstDoc" class="form-select">
					<option value="">La résidence Coulomb</option>
					<option value="">La résidence Fresnel</option>
					<option value="">La résidence Ampère</option>
					<option value="">Nos conditions générales</option>
				</select>
			</div>

		</div>
		<div class="row mt-3">
			<div class="col">
				<label for="question" class="form-label  text-primary">Votre question ici :</label>
				<textarea id="question" class="form-control" rows="3"></textarea>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col text-center">
				<button class="btn btn-primary " type="submit" >
					Envoyer&nbsp;
					<i class="bi bi-send-fill"></i>
				</button>
			</div>
		</div>
	</form>
</main>
