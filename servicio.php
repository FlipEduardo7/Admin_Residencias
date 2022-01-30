  <?php include('includes/header.php'); ?>

  <?php
  include('conexion.php');

  $tmp = array();
  $res = array();

  $sel = $con->query("SELECT * FROM files2");
  while ($row = $sel->fetch_assoc()) {
    $tmp = $row;
    array_push($res, $tmp);
  } ?>

  <div class="head-mobile">
    <a href="https://www.itsa.edu.mx/">
      <img src="https://www.itsa.edu.mx/wp-content/uploads/2019/06/cel2.png" alt="cel2" />
    </a>
  </div>

  <div class="head">
    <a href="https://www.itsa.edu.mx/">
      <img class="" src="https://www.itsa.edu.mx/wp-content/uploads/2021/06/pleca_tecnm_3.jpg" alt="tecnm" />
    </a>
    <a href="https://www.gob.mx/sep">
      <img class="" src="https://www.itsa.edu.mx/wp-content/uploads/2020/02/pleca-gob2.png" alt="pleca-gob2" />
    </a>
    <a href="https://www.gob.mx/">
      <img class="imagen-head" src="https://www.itsa.edu.mx/wp-content/uploads/2021/06/pleca-gob1_2.jpg" alt="pleca-gob1_2" />
    </a>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://www.itsa.edu.mx/"><i class="fas fa-home"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="https://www.itsa.edu.mx/instituto-tecnologico-superior-de-apatzingan2/" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Institucion
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="https://www.itsa.edu.mx/directorio/">Directorio</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="https://www.itsa.edu.mx/instituto-tecnologico-superior-de-apatzingan2/" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Oferta Educativa
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="https://www.itsa.edu.mx/contador-publico/">Contador Publico</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://www.itsa.edu.mx/ingenieria-civil/">Ingenieria Civil</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://www.itsa.edu.mx/ingenieria-en-gestion-empresarial/">Ingenieria en Gestión Empresarial</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://www.itsa.edu.mx/ingenieria-en-innovacion-agricola-sustentable/">Ingenieria en Innovacion Agricola Sustentable</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://www.itsa.edu.mx/ingenieria-en-sistemas-computacionales/">Ingenieria en Sistemas Computacionales</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://www.itsa.edu.mx/ingenieria-bioquimica/">Ingenieria Bioquimica</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://www.itsa.edu.mx/ingenieria-informatica/">Ingenieria Informatica</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://www.itsa.edu.mx/ingenieria-industrial/">Ingenieria Industrial</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="https://www.itsa.edu.mx/instituto-tecnologico-superior-de-apatzingan2/" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Departamentos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="https://www.itsa.edu.mx/centro-de-informacion/">Centro de Informacion</a>
              </li>
              <li>
                <a class="dropdown-item" href="http://itsaextraescolares.com/">Servicios extraescolares</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://www.itsa.edu.mx/gestion-tecnologica-y-vinculacion/">Gestión Tecnológica y vinculacion</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://www.itsa.edu.mx/servicios-escolares-2/">Control Escolar</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://www.itsa.edu.mx/servicio-social/">Servicio Social</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://www.itsa.edu.mx/coordinacion-de-lenguas-extranjeras-2/">coordinacion de lenguas extranjeras</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://www.itsa.edu.mx/comunicacion-y-difusion/">Difucion y concertacion</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://www.itsa.edu.mx/subdireccion-de-planeacion/">subdireccion de planeacion</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://www.itsa.edu.mx/sistemas-de-gestion-2/">Sistemas de Gestión</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://www.itsa.edu.mx//posgrado-e-investigacion/">Titulación</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://www.itsa.edu.mx/residencias-profesionales-3/">Residencias profesionales</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="https://www.itsa.edu.mx/becas-2/">Becas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="https://www.itsa.edu.mx/eventos-2/">Eventos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="https://www.itsa.edu.mx/convocatorias/">Convocatorias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="https://www.itsa.edu.mx/becas-2/">Videos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="http://laip.michoacan.gob.mx/acceso/nuevas_dependencia.jsp?id_dependencia=61">Transparencia</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <h1>Servicio Social</h1>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="https://www.gob.mx/cms/uploads/document/main_image/79814/SS.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="https://www.prevenfisame.org.mx/assets/img/ss.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="http://www.uv.mx/veracruz/sea/files/2014/08/Servicio-Social-logo.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container-fluid p-4 fs-5 fw-bold">
    Alumno(na) Prestador de Servicio Social, estos son los Formatos/Anexos y demás documentos que deberas utilizar en el orden en que están listados a lo largo de todo tu proceso. Te recomendamos estes pendiente de los procedimientos publicados en la Web y  redes sociales oficiales del ITSA para que sepas en que momento estar utilizándolos. (Los procedimientos también serán agregados a este espacio para su consulta)
    </div>

    <h2>Zona de Descargas</h2>
    <br>
    <table class="table mt-2">
      <thead>
        <tr>
          <th scope="col">Título</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($res as $val) { ?>
          <tr>
            <td><?php echo $val['title'] ?></td>
            <td><?php echo $val['description'] ?></td>
            <td>
              <button onclick="openModelPDF('<?php echo $val['url'] ?>')" class="btn btn-primary" type="button">Ver Archivo</button>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>


    <h3 class="text-center py-2">Contacto</h3>
    <!--Tarjeta de Contacto-->
    <div class="container-tag">
      <div class="card-container">
        <div class="header-tag">
          <a href="">
            <img src="./img/itsa-logo.jfif" alt="Logo ITSA">
          </a>
          <h2 class="text-primary">Lic. Juan Carlos Rangel Barragán</h2>
          <h4>Jefe de Oficina</h4>
        </div>
        <div class="descripcion">
          <p>Correo: teacher_rangel@itsa.edu.mx</p>
          <p>Horario de atención: 10:00 - 14:00 horas</p>
          <p>Movil: 4535390599</p>
          <p>Direccion: KM. 3.5 Carretera Apatzingán-Aguililla, Tenencia de Chandio</p>
          <p>Código Postal: 60710</p>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modalPdf" tabindex="-1" aria-labelledby="modalPdf" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ver archivo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <iframe id="iframePDF" frameborder="0" scrolling="no" width="100%" height="500px"></iframe>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

          </div>
        </div>
      </div>
    </div>

    <footer class="bg-white text-black py-4 foot-pd li-cen">
      <div class="container con-cen">
        <nav class="row">
          <!--Logo-->
          <a href="#" class="col-3 text-reset text-uppercase d-flex align-items-center">
            <img src="https://www.itsa.edu.mx/wp-content/uploads/2019/06/footernuevo2018.png" alt="footer-image" class="img-logo mr-2">
          </a>
          <!--Menu-->
          <ul class="col-3 list-unstyled">
            <li class="fw-bold text-uppercase">Telefonos</li>
            <li><a href="#" class="text-reset">453-534-830</li>
            <li><a href="#" class="text-reset">453-534-0371</a></li>
            <li><a href="#" class="text-reset">453-534-2513</a></li>
          </ul>
          <!--menu-->
          <ul class="col-3 list-unstyled">
            <li class="fw-bold text-uppercase">Correo</li>
            <li><a href="#" class="text-reset">webadmin@itsa.edu.mx</a></li>
          </ul>
          <!--Redes-->
          <ul class="col-3 list-unstyled">
            <li class="fw-bold text-uppercase">Redes Sociales</li>
            <li class="d-flex justify-content-between">
              <a target="_blank" href="https://www.facebook.com/ItsaApatzingan" class="text-reset">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="#" class="text-reset">
                <i class="fab fa-instagram"></i>
              </a>
              <a target="_blank" href="https://goo.gl/maps/nauHwsdr8fTy8Gp17" class="text-reset">
                <i class="fas fa-map-marker-alt"></i>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </footer>

    <div class="footer-mobile py-4">
      <img src="https://www.itsa.edu.mx/wp-content/uploads/2019/06/footernuevo2018.png" alt="footer-image" class="py-4">
      <p class="fw-bold">Telefonos</p>
      <p>453-534-830</p>
      <p>453-534-0371</p>
      <p>453-534-2513</p>
      <p class="fw-bold">Correo</p>
      <p>webadmin@itsa.edu.mx</p>
      <p class="fw-bold">Redes Sociales</p>
      <li class="d-flex justify-content-between">
        <a target="_blank" href="https://www.facebook.com/ItsaApatzingan" class="text-reset">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="#" class="text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a target="_blank" href="https://goo.gl/maps/nauHwsdr8fTy8Gp17" class="text-reset">
          <i class="fas fa-map-marker-alt"></i>
        </a>
      </li>
    </div>

  </div>

  <?php include_once './includes/footer.php'; ?>

  </html>