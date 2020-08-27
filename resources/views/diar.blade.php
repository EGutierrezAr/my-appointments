<html>
<head>
<title>Business Website</title>   
<link rel="stylesheet" type="text/css" href="css/diar.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<!------- NAvigation Bar----->
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#"><img src="img/diar/logo.jpeg"></a>
        <div><h3>DIAR, S.A.S DE C.V.</h3>
         <div> <i class="fa fa-phone" aria-hidden="true"></i> 5529470091, 5539984240 </div>
        </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="active">
            <a class="nav-link" href="#top"><i class="fa fa-home" aria-hidden="true"></i>HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about"><i class="fa fa-user" aria-hidden="true"></i>QUIENES SOMOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services"><i class="fa fa-clone" aria-hidden="true"></i>NUESTROS SERVICIOS</a>
          </li>
          <!--li class="nav-item">
            <a class="nav-link" href="#team"><i class="fa fa-user" aria-hidden="true"></i>OUR TEAM</a>
          </li-->
          <li class="nav-item">
            <a class="nav-link" href="#productos"><i class="fa fa-product-hunt" aria-hidden="true"></i>PRODUCTOS Y EQUIPO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#testimonials"><i class="fa fa-users" aria-hidden="true"></i>TESTIMONIOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact"><i class="fa fa-phone" aria-hidden="true"></i>CONTACTO</a>
          </li>
        </ul>
      </div>
    </nav>
</section>
<!-----------Slider---------->
<div id="slider">
    <div id="headerSlider" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
        <li data-target="#headerSlider" data-slide-to="1"></li>
        <li data-target="#headerSlider" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/diar/banner11.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Servicio Residencial</h5>
            <p>Casas Departamentos Edificios</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/diar/banner22.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Servicio Empresarial</h5>
            <p>Negocios Oficinas Restaurantes Plantas Industriales</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/diar/banner33.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Otros servicios</h5>
            <p>Transporte (Carga y Pasajeros) Escuelas Hospitales</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>
<!-----------About---------->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>Quienes somos</h2>
                <div class="about-content">
                    Somos una empresa 100% mexicana formada por empresarios con más de 20 años de experiencia en la industria de  la fumigación, control de plagas y sanitización de diferentes industrias. Nuestra propuesta de valor es cuidar la salud, seguridad y bienestar de nuestros clientes, eliminando y controlando la fauna nociva del hogar, oficina, plantas industriales, trasportes de carga y pasajeros, así como agropecuarias, entre otras, haciendo con altos etándares de calidad que exceden las espectativas del cliente
                </div>
                <div class="about-content">
                    Utilizamos técnicas de saneamiento conforme a las diferentes Normas Oficiales Mexicanas (<b><mark>NOM</mark></b>) tanto de la Secretaría de Salud, como de la Secretaría de Trabajo, <b><mark>SEMARNAT</mark></b> y <b><mark>Cofepris</mark></b>. También aplicamos los métodos y técnicass aprobadas por la <b><mark>OMS</mark></b> (Organización Mundial de la Salud), <b><mark>EPA</mark></b> (Environmental Protección Agency) <b><mark>OSHA</mark></b> (Occupational Safety And Health Administration).
                </div>
            </div>
            <div class="col-md-5 skills-bar">
                <h4>Porcentaje de servicios contratados:</h4>

                <p> <i class="fa fa-home" aria-hidden="true"></i>  Casas</p>
                <div class="progress">
                    <div class="progress-bar" style="width: 40%;">30%</div>
                </div>
                <p> <i class="fa fa-building" aria-hidden="true"></i>  Departamentos y Edificios</p>
                <div class="progress">
                    <div class="progress-bar" style="width: 60%;">50%</div>
                </div>
                <p><i class="fa fa-building-o" aria-hidden="true"></i>  Oficinas y Restaurantes</p>
                <div class="progress">
                    <div class="progress-bar" style="width: 25%;">15%</div>
                </div>
                <p><i class="fa fa-bus" aria-hidden="true"></i>   Escuelas, Hospitales, Plantas Industriales y Transportes</p>
                <div class="progress">
                    <div class="progress-bar" style="width: 15%;">5%</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------------Services--------->
<section id="services">
    <div class="container">
      <h1>Nuestros Servicios</h1>  
      <div class="row services">
        <div class="col-md-2 text-center">
            <div class="icon">
                <i class="fa fa-fire-extinguisher"></i>
            </div>
                <h3>Programa preventivo</h3>
                <p>
                    Se propone realizarlo cuando  no se tiene evidencia de una contaminación, bacteriana, mocrobiana o de una fauna nociva, pero que existe una potencial contamiación en las instalaciones.
                </p>
            
        </div>
        <div class="col-md-2 text-center">
            <div class="icon">
                <i class="fa fa-fire-extinguisher"></i>
            </div>
                <h3>Programa Correctivo</h3>
                <p>
                    Se realiza el servicio de sanitización o fumigación cuanto se tiene la sospecha o evidencia de la presencia de cualquier agente nocivo ya sea viral, bacteriana o fauna nociva epecífica.
                </p>
        </div>
        <div class="col-md-2 text-center">
            <div class="icon">
                <i class="fa fa-heartbeat"></i>
            </div>
                <h3>Desinfeción</h3>
                <p>
                    Lo hacemos aplicando soluciones desinfectantes para eliminar virus, bacterias y mmicroorganismos que se enncuentran en cualquier superficie de uso común y son causantes de enfermendades en los humanos.
                </p>
        </div>
        <div class="col-md-2 text-center">
            <div class="icon">
                <i class="fa fa-medkit"></i>
            </div>
                <h3>Fumigación</h3>
                <p>
                    Utilizamos agentes acaricidas, termiticidas, plaguicidas, insecticidas en presentaciones líquidas o gaseosas que no dañan el ambiente ni al ser humano.
                </p>
        </div>
        <div class="col-md-2 text-center">
            <div class="icon">
                <i class="fa fa-medkit"></i>
            </div>
                <h3>Diagnóstico</h3>
                <p>
                    Realizamos un visita de inspección para conocer las instalaciones, estimar las áreas y superficies, así como diagnosticar el problema y calcular el impacto sanitario.
                </p>
        </div>
      </div>
    </div>
</section>

<!---------------Virus--------->
<section id="virus">
    <div class="container">
      <h1>Principales patógenos a controlar</h1>
      <div class="row virus">
            <div class="col-md-6 text-left">  
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Virus (nucleótidos y motocondriales)
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Coronavirus sars cov (síndrome agudo respiratorio grave)</li>
                            <li class="list-group-item">Coronavirus sars cov-2 (covid-19)</li>
                            <li class="list-group-item">Adenovirus (queratitis, anginas, diarrea)</li>
                            <li class="list-group-item">Herpesviridae (virus del herpes)</li>
                            <li class="list-group-item">Norovirus (gastroenteritis por intoxicación alimentaria)</li>
                            <li class="list-group-item">Parvovirus b19 (hepatitis b)</li>
                            <li class="list-group-item">Poxviridae (virus de la viruela bovina)</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Bacterias Gram positivas
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Estafilococos</li>
                            <li class="list-group-item">Estreptococos</li>
                            <li class="list-group-item">Listeria</li>
                            <li class="list-group-item">Clostridium</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Hongos, mohos y levaduras
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Aspergillus niger</li>
                            <li class="list-group-item">Crandida albicans</li>
                            <li class="list-group-item">Cryptococcus neoformans</li>
                            <li class="list-group-item">Fusarium sp.</li>
                            <li class="list-group-item">Sporothrix schenckii</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="col-md-6 text-left">  
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Bacterias gramnegativas
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Escherichia coli</li>
                            <li class="list-group-item">Salmonella</li>
                            <li class="list-group-item">Shigella</li>
                            <li class="list-group-item">Pseudomona aeruginosa</li>
                            <li class="list-group-item">Vibrio cholerae</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Esporulados
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Bacillus subtilis</li>
                            <li class="list-group-item">Neurospora crassa</li>
                            <li class="list-group-item">Clostridium tetani</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Protozoos
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Entamoeba histolytica</li>
                            <li class="list-group-item">Giardia lamblia</li>
                            <li class="list-group-item">Paramecium sp</li>
                            <li class="list-group-item">Plasmodium sp</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
     </div>
    </div>
</section>

<!---------------Productos----------->
<section id="productos">
    <div class="container">
        <h1>Productos desinfectantes</h1>
        <div class="row productos">
          <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><h6 class="fa fa-arrow-circle-right">   BENCIDIAR CB</h6></a>
              <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><h6 class="fa fa-arrow-circle-right">   GERMIDIAR AG</h6></a>
              <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><h6 class="fa fa-arrow-circle-right">   SANIDIAR MULTISUPERFICIES</h6></a>
            </div>
          </div>
          <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <p>
                    Desinfectante de amplio espectro bactericida e inhibidor de la actividad viral, fungicida y protozoocida, es un biocida de acción rápida y larga residualidad logrando eficacia aún en gérmenes patógenos considerados resistentes como los esporulados. Su principio activo  es una  <span>sal de grupo cuaternarios de amonio 5ta generación </span> en una formulación a base de tensioactivos aniónicos y catiónicos, con agentes surfactantes que actúan de manera sinérgica emulsionando las grasas y abatiendo la tensión superficial de los líquidos sirviendo  de vehículo al activo para una mayor penetración en la cavidad microscópica logrando que el desinfectante actúe mayor profundidad.
                </p>
                </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                 <p>
                    Desinfectante de amplio espectro cuyo principio activo  es el aldehído glutárico el cual está considerado como  un biocida de alto nivel. para mejores resultados ejerce su acción médiante una formulación a base de tensioactivos aniónicos y catiónicos, con agentes surfactantes que actúan de manera sinérgica emulsionando las grasas y abatiendo la tensión superficial de los líquidos sirviendo el resto de las formulación de vehículo  al activo para una mayor penetración en la cavidad microscópica logrando así mayor eficacia.
                </p>   
              </div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                  <p>
                    Desinfectante de amplio espectro cuyos ingredientes activos son la sal del grupo cuaternario de amonio 5ta generación, ejerce su acción mediante uan formulación a base de tensioactivos aniónicos y catiónicos, con agentes surfactantes que actúan de manera sinérgica emulsionando las grasas y abatiendo la tensión superficial de los líquidos sirviendo el resto de las formulación de vehículo  al activo para una mayor penetración en la cavidad microscópica logrando así mayor eficacia. Está nueva formulación fue diseñada para ser usada sin diluir directamente sobre las superficies a tratar ya sean del hogar, oficina, comercio y demás áreas públicas expuestas a las contaminación de gérmenes infecciosos como pueden ser, escritorios, teléfonos, conmutadores, computadoras, monitores, archivadores, lámparas, apagadores, mostradores, puertas, ventanas, entre otros.
                 </p>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>
<!---------------Promo----------->
<section id="price">
    <div class="container">
      <h1>Equipo</h1>
      <div class="row price">
        <div class="col-3">
        </div>
         <div class="col-9">
                <div class="col-md-8">
                    <div class="single-price">
                        <div class="price-head">
                            <h2>Equipo para la aplicación de desinfectante</h2>
                        </div>
                        <div class="price-content">
                            <ul>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>Bomba aspersor manual de inyécción de aire</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>Bomba nebulizadora de ultra bajo volumen (ubv)</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>Lienzos limpios esterilizadores</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>Máquina hidrolavadora de baja presión Domain</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>Overol tyvek</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>Gafete de identificación</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>Guante de hule  y/o látex</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>Calzado de seguridad propio para prestar el servicio</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>Marcarilla</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>Cuña</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>La herramienta manual necesaria</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
     </div>
    </div>
</section>
<!---------------Testimonials----------->
<section id="testimonials">
    <div class="container">
        <h1>Testimonios</h1>
        <div class="row">
            <div class="col-lg-2 col-md-12 mb-4">
                <img src="img/diar/calle.jpeg" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-12 mb-4">
                <img src="img/diar/pasillo.jpeg" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-12 mb-4">
                <img src="img/diar/escaleras.jpeg" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-12 mb-4">
                <img src="img/diar/fabrica1.jpeg" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-12 mb-4">
                <img src="img/diar/fabrica2.jpeg" class="img-fluid">
            </div>
        </div>        
    </div>
</section>
<!--------------- Contancto ----------->
<section id="contact">
    <div class="container">
    <h1>Contacto</h1>
    <div class="row">
        <!--div class="col-md-6">
            <form class="contact-form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Teléfono">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="email">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="4" placeholder="Comentario"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar información</button>
            </form>
        </div-->
        <div class="col-md-6 contact-info">
            <div class="follow"><b>Dirección:</b> <i class="fa fa-map-marker" aria-hidden="true"></i> Paseo de los ahuehuetes No 793, Col: Bosques de las lomas, Del: Miguel Hidalgo CDMX</div>
       
            <div class="follow"><b>Telefono:</b> <i class="fa fa-phone" aria-hidden="true"></i> 5529470091, 5539984240 </div>
        
            <div class="follow"><b>Correo:</b> <i class="fa fa-envelope-o" aria-hidden="true"></i> ventas@diar.com </div>

            <div class="follow"><label> <b>Get social:</b> </label>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    </div>
</section>

<!----------- Footer -------------->
<footer>
    <section id="footer_one">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-3 text-left">
                    <p><b><mark>DIAR, SAS DE C.V.</mark></b>, está orientara en el bienestar de nuestros clientes . Revisamos continuamente la  calidad de los productos que utilizamos; aplicamos consitentemente los protocolos de seguridad, evitando riesgos tanto en la salud como en los bienes de sus clientes</p>
                </div>
                <div class="col-md-3 text-left">
                    <p>Todos los germicidas y desinfectantes se encuentran autorizados por la Secretaría de Salud, así mismo, nuestra empresa esta autorizada para la realización de los servicios de sanitización con la licencia sanitaria <b><mark>12 AP 09 011 003</mark></b> otorgada po <b>COFEPRIS (Comisión Federal para la Protección de Riesgos Sanitarios)</b> bajo la responsiva de E.E.K. Sistemas y Servicios de Fumigación Ecológica, S.A. de C.V.</p>
                </div>
                <div class="col-md-3 text-left">
                    <div class="view overlay z-depth-1-half">
                      <img src="img/diar/cofepris.PNG" class="img-fluid" alt="https://www.gob.mx/cofepris">
                      <hr></hr>
                      <img src="img/diar/oms.jpg" class="img-fluid" alt="https://www.gob.mx/cofepris">
                    </div>

                </div>
            </div>  
            
        </div>
    </section>
    <section id="footer_thwo">
        <div class="container text-center">
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> DIAR, SAS DE C.V.</a>
      </div>
        </div>
</section>
</footer>
<!-------------- Footer End ------------>
<script src="js/smooth-scroll.js"></script>
<script>
    var scroll = new SmoothScroll('a[href*="#"]');
</script>
</body>
</html>