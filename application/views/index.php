<div id="first">
	<div class="content">
		<h1 class="text-center text-white">Hogar es donde la <br> comida te sabe mejor</h1>
		<br>
		<p class="text-center text-white">Cónoce nuestra sazón y no querrás nada más</p>
		<img src="assets/images/icono_banner.png" class="center-iamge"alt="">
	</div>
</div>
<div id="second">
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<h3 class="text-center text-white">¿Quieres recibir ofertas semanales?</h3>
			</div>
		</div>
		<br>
		<div class="row">
		    <div class="col-sm">
		      <input type="text" placeholder="Nombre">
		    </div>
		    <div class="col-sm">
		      <input type="text" placeholder="Edad">
		    </div>
		    <div class="col-sm">
		      <input type="text" placeholder="Correo">
		    </div>
		    <div class="col-sm">
		      <input type="text" placeholder="Teléfono">
		    </div>
		    <div class="col-sm">
		      <a href="" class="btn btn-outline">Enviar</a>
		    </div>
		  </div>
	</div>
</div>
<div id="third">
	<div class="container">
		<div class="row">
			<div class="col" style="padding: 50px 0;">
		      <div class="row">
		      	<div class="col-sm-12">
		      		<h1>El legado de Maca</h1>
		      	</div>
		      </div>
		      <div class="row">
		      	<div class="col-sm-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi ipsum rem provident, atque esse recusandae illo quae, quia a. Est, veritatis. Vero impedit accusamus minus nostrum, consequuntur facere, nulla reprehenderit!</div>
		      		<div class="col-sm-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam placeat perferendis ullam modi voluptatibus sunt cupiditate maxime mollitia officia? Itaque quas eius, veritatis aspernatur natus quos velit eos eaque. Consectetur.</div>
		      </div>
		    </div>
		    <div class="col-4">
		      <img src="assets/images/imagen_legadomaca.png" style="height: 350px;" alt="">
		    </div>
		</div>
	</div>
</div>
<div id="fourth">
	<div class="container">
		<div class="row">
			<div class="col" style="padding: 0;">
				<img src="assets/images/imagen_menu.png" style="max-width: 100%;" alt="">
			</div>
			<div class="col-4" style="background: #ff0b40; padding: 40px;">
				<h1 class="text-center text-white">Desayuno</h1>
				<div class="row">
					<div class="col-5">
						<h4>Pollo</h4>
						<ul>
							<li>Pollo en mole</li>
							<li>Milanesa de pollo empanizada</li>
						</ul>
						<h4>Res</h4>
						<ul>
							<li>Res oriental</li>
							<li>Milanesa de res empanizada</li>
						</ul>
						<h4>Puerco</h4>
						<ul>
							<li>Asado de puerco</li>
						</ul>
					</div>
					<div class="col-7">
						<h4>Pescado</h4>
						<ul>
							<li>Pescado zarandeado</li>
						</ul>
						<h4>Especial</h4>
						<ul>
							<li>Diezmillo al grill</li>
						</ul>
						<h4>Guarniciones</h4>
						<ul>
							<li>Espagueti al cilantro</li>
							<li>Arroz azafranado</li>
							<li>Frijoles en bola</li>
							<li>Verduraz al vapor</li>
							<li>Nopales guisados</li>
							<li>Puré de papa</li>
						</ul>
						<h4>Sopa</h4>
						<ul>
							<li>Sopa de tortilla</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="fifth">
	<div class="row">
		<div class="col"></div>
		<div class="col">
			<h1 class="text-center">
				Nuestras
			</h1>
		</div>
		<div class="col"></div>
	</div>
</div>
<div id="six">
	<div id="map" style="width: 100%; height: 300px;"></div>
</div>
<div id="seven">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>Contacto</h1>
			</div>
			<div class="col">
				<p>81 29 32 39 23<br>81 30 89 77 55</p>
			</div>
			<div class="col">Larralde #144 Col.<br>Chepevera, Mty. N.L.</div>
			<div class="col">Larralde #144 Col.<br>Chepevera, Mty. N.L.</div>
			<div class="col">contacto@lafonda.mx</div>
		</div>
	</div>
</div>
<script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 25.724418, lng: -100.237035},
          zoom: 15
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFCP13AmeMjs7qC0kJoT7vMuDAnkM9x8&callback=initMap" async defer></script>