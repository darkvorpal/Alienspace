<?php include_once('php/components/header.php') ?>

<main class="home-section container ">
  <div class="row">
    <section class=" col-lg-12 mt-2 " id="block-1">
      <img class="rounded" src="../../stylesheets\contents\images\banner\default-cover.png" alt="">
      <div class="col-lg-12 block-profil position-absolute d-flex align-items-center ">
        <div id="avatar-profil" class=" rounded">
          <img src="../../stylesheets\contents\images\users\default-avatar.jpg" alt="profileImg" />
        </div>
        <img class="badgelvl" src="../../stylesheets\contents\images\badges\06- Legendary Rank.png" alt="" />
        <div class="  mb-0  title-board">
          <h1 class="text-white">
            Prem Shahi
          </h1>
        </div>
      </div>

    </section>
  </div>
  <div class=" row">
    <section class="responsive" id="section-slider-badge">
      <div><img src="../../stylesheets\contents\images\icones\01- Bronze Token.png" alt="badges"></div>
      <div><img src="../../stylesheets\contents\images\icones\02- Silver Token.png" alt="badges"></div>
      <div><img src="../../stylesheets\contents\images\icones\03- Gold Token.png" alt="badges"></div>
      <div><img src="../../stylesheets\contents\images\icones\04- Platinum Token.png" alt="badges"></div>
      <div><img src="../../stylesheets\contents\images\icones\Carbon.png" alt="badges"></div>
      <div><img src="../../stylesheets\contents\images\icones\Emerald.png" alt="badges"></div>
      <div><img src="../../stylesheets\contents\images\icones\Gem.png" alt="badges"></div>
      <div><img src="../../stylesheets\contents\images\icones\Gold.png" alt="badges"></div>

    </section>
  </div>
  <div class="row">
    <section class="col-lg-5 mt-2" id="content">
      <!-- <article class="p-2 mb-2">
        
      </article> -->
      <article class="p-2 mb-2">
        <div class="d-flex justify-content-around flex-wrap card-wrapper">
          <div class="card mb-2 col-2 border-2 border-info">
            <div class="card-header bg-info" for=""> Cours</div>
            <div class="card-body"><span class="d-flex align-items-center">1</span><i class="bi bi-book-fill bg-info rounded"></i></div>
          </div>
          <div class="card mb-2 col-2 border-2 border-warning">
            <div class="card-header bg-warning" for="">Fichiers</div>
            <div class="card-body"><span class="d-flex align-items-center">2</span><i class="bi bi-folder-fill bg-warning rounded"></i></div>
          </div>
          <div class="card mb-2 col-2 border-2 border-danger">
            <div class="card-header bg-danger" for="">Favoris</div>
            <div class="card-body"><span class="d-flex align-items-center">2</span><i class="bi bi-balloon-heart-fill bg-danger rounded"></i></div>
          </div>
          <div class="card mb-2 col-2 border-2 border-primary">
            <div class="card-header bg-primary" for="">Suivie</div>
            <div class="card-body"><span class="d-flex align-items-center">2</span><i class="bi bi-people-fill bg-primary rounded"></i></div>
          </div>
        </div>
      </article>
      <article class="col-md-12  mb-2 ">
        <div class="card border-0">
          <div class="card-header">
            <i class="bi bi-folder-fill fs-2"></i>&nbsp;&nbsp; <h2 class="text-white m-0 p-0">Mes Documents</h2>
            <button type="button" class="btn d-flex align-items-center ms-auto text-white btn-sm"><i class="bi  bi-plus-square"></i>&nbsp;&nbsp; Ajouter</button>

          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Matiere</th>
                    <th scope="col">date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  <tr>
                    <th scope="row">1</th>
                    <td>Introduction</td>
                    <td>Histoire de l'art</td>
                    <td>26/04/2020</td>
                    <td>
                      <button type="button" class="btn text-white btn-primary btn-sm">
                        Consulter
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </article>
      <article class="col-md-12 ">
        <div class="card">
          <div class="card-header">
            <i class="bi bi-book-fill fs-2"></i>&nbsp;&nbsp; <h2 class="text-white  m-0 p-0">Mes Cours</h2>
            <button type="button" class="btn d-flex align-items-center ms-auto text-white btn-sm"><i class="bi  bi-plus-square"></i>&nbsp;&nbsp; Ajouter</button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">date</th>
                    <th scope="col">évolution Cours</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  <tr>
                    <th scope="row">1</th>
                    <td>histoire de l'art</td>
                    <td>26/04/2020</td>
                    <td>
                      <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width: 75%">
                          <p class="m-0">75%</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <button type="button" class="btn text-white btn-primary btn-sm">
                        Reprendre
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </article>
    </section>
    <section class="col-lg-7 mb-5 mt-2" id="social-content">
      <article class="col-lg-12 mb-2">
        <div class="card">
          <div class="card-header d-flex align-items-center">
            <i class="bi bi-body-text fs-2"></i> &nbsp;&nbsp;<h2>publier du contenue</h2>
          </div>
          <div class="card-body">
            <div class="form-control" id="wn" data-toggle="modal" data-target="#exampleModal">
              <p class="text-white m-0">😎 Quoi de neuf ?</p>
            </div>
          </div>
        </div>
      </article>
      <article class="col-lg-12">
        <div class="card">
          <div class="card-header post-header">
            <img src="../../stylesheets\contents\images\users\default-avatar.jpg" alt="profileImg" />
            <div class="d-flex flex-column ms-2">
              <p class="m-0">Prem Shahi</p>
              <small>12/05/2024</small>
            </div>
            <div class="ms-auto">
              <div class="btn-group">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bi bi-three-dots-vertical "></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <button class="dropdown-item" type="button">Action</button>
                  <button class="dropdown-item" type="button">Another action</button>
                  <button class="dropdown-item" type="button">Something else here</button>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body post-body">
            <img class="img-fluid" src="../../stylesheets\contents\images\illustrations\example-post.png" alt="">
            <div class="card-img-overlay">
              <h5 class="card-title">Modelisme 3D</h5>
              <p class="card-text mb-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
          <div class="card-footer post-footer">
            <div class="like">
              <span id="counter">0</span>
              <i id="heart" class="ms-2 bi bi-balloon-heart-fill fs-4"></i>
            </div>
            <div class="share ms-auto">
              <i class="text-white bi bi-share fs-4"></i>
            </div>
          </div>
        </div>
      </article>
    </section>
  </div>
</main>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center" id="exampleModalLabel"><i class="bi bi-body-text fs-2"></i> &nbsp;&nbsp;publier du contenue</h5>
        <button class="btn" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="bi bi-x-square text-white"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="zone-media">

          </div>
          <div class="form-floating mb-2">
            <textarea class="form-control" id="floatingTextarea2"></textarea>
            <label for="floatingTextarea2">😎 Quoi de neuf ?</label>
          </div>
          <div class="d-flex  justify-content-end">
            <button class="btn me-md-2 text-white bouttonMedia" type="button"><i class="bi bi-file-image"></i> Ajouter un media</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php include_once('php/components/footer.php') ?>