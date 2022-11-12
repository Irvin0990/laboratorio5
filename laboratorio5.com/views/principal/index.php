<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../img/p1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <p>La mayoría de los perros, saben lo que son, no como los humanos..</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../img/p2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <p>Un perro es una sonrisa y una cola que se mueve alegremente... lo demás ¡No importa!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../img/p3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <p>Todos los hombres son dioses para su perro. Por eso hay gente que ama más a sus perros que a los hombres.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<br>
<hr>
<br>
<div class="container-sm">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="card border-warning mb-3" style="max-width: 18rem;">
         <div class="card-header">Nosotros</div>
              <div class="card-body text-info">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
         </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="card border-warning mb-3" style="max-width: 18rem;">
         <div class="card-header">Enfermedades</div>
              <div class="card-body text-info">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
         </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="card border-warning mb-3" style="max-width: 18rem;">
         <div class="card-header">Razas</div>
              <div class="card-body text-info">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
         </div>
      </div>

    </div>
    <br>
    <hr>
    <h1 class="text-center">Catalogo</h1>
    <br>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card" style="width: 300 px, height: 200 px">
                <img src="../img/pr1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>Teckel </h4>
                    <hr>
                    <p class="card-text">Raza de perro de origen alemán cuyo peso oscila entre 3,5 y 9 kilogramos y alcanza entre 26 y 37 centímetros de altura aproximadamente.</p>
                </div>
                <hr>
                <div class="btn-group">
                    
                    <a href="#" class="btn btn-primary">Ver</a>
                    <a href="<?php echo "index.php?c=".seguridad::codificar("contacto")."&m=".seguridad::codificar("crear") ?>" class="btn btn-primary">Comprar</a>
                </div>
            </div>
            
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" style="margin-left: 5px, margin-right: 5px ">
            <div class="card" style="width: 300 px, height: 200 px">
                <img src="../img/pr2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h4>Pastor aleman </h4>
                    <hr>
                    <p class="card-text">Raza de perro de origen alemán cuyo peso oscila entre 3,5 y 9 kilogramos y alcanza entre 26 y 37 centímetros de altura aproximadamente.</p>
                </div>
                <hr>
                <div class="btn-group">
                    
                    <a href="#" class="btn btn-primary">Ver</a>
                    <a href="<?php echo "index.php?c=".seguridad::codificar("contacto")."&m=".seguridad::codificar("crear") ?>" class="btn btn-primary">Comprar</a>
                </div>
            </div>
            
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card" style="width: 300 px, height: 200 px">
                <img src="../img/pr3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h4>Cockie spaniel</h4>
                    <hr>
                    <p class="card-text">Raza de perro de origen alemán cuyo peso oscila entre 3,5 y 9 kilogramos y alcanza entre 26 y 37 centímetros de altura aproximadamente.</p>
                </div>
                <hr>
                <div class="btn-group">
                    
                    <a href="#" class="btn btn-primary">Ver</a>
                    <a href="<?php echo "index.php?c=".seguridad::codificar("contacto")."&m=".seguridad::codificar("crear") ?>" class="btn btn-primary">Comprar</a>
                </div>
            </div>
            
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card" style="width: 300 px, height: 200 px">
                <img src="../img/pr4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h4>Labrador</h4>
                    <hr>
                    <p class="card-text">Raza de perro de origen alemán cuyo peso oscila entre 3,5 y 9 kilogramos y alcanza entre 26 y 37 centímetros de altura aproximadamente.</p>
                </div>
                <hr>
                <div class="btn-group">
                    <a href="#" class="btn btn-primary">Ver</a>
                    <a href="<?php echo "index.php?c=".seguridad::codificar("contacto")."&m=".seguridad::codificar("crear") ?>" class="btn btn-primary">Comprar</a>
                </div>
            </div>
            
        </div>
    </div>
    <br>
</div>
   