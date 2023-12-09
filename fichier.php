<?php 

include_once('php\components\header.php')

?>
<main class="home-section container ">
    <div class="row mt-5">
        <div class="col-lg-12 d-flex justify-content-end">
            <a class="btn btn-outline-primary me-2" data-toggle="modal" data-target="#exampleModal" role="button"><i class="bi bi-folder-plus"></i> Ajouter un dossier</a>
            <a class="btn btn-outline-primary me-2" data-toggle="modal" data-target="#exampleModal2" role="button"><i class="bi bi-file-earmark-plus"></i> Ajouter un fichier</a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-lg-12">
            <section id="folder-section" class="gap-1">
                <div class="folder rounded">
                    <a href=""><i class="bi bi-folder-fill"></i>folder name</a>
                </div>
                <div class="picture rounded">
                    <a href=""><i class="bi bi-card-image"></i>Image name</a>
                </div>
                <div class="file rounded">
                    <a href=""><i class="bi bi-file-text-fill"></i>File name</a>
                </div>
                <div class="movie rounded">
                    <a href=""><i class="bi bi-film"></i>Movie name</a>
                </div>
            </section>
        </div>
    </div>
</main>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center" id="exampleModalLabel"><i class="bi bi-folder-plus"></i> &nbsp;&nbsp;Ajouter un dossier</h5>
                <button class="btn" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="bi bi-x-square text-white"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class=" mb-2">
                        <input name="doss_name" type="text" placeholder="Entrer le nom du dossier" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center" id="exampleModalLabel"><i class="bi bi-file-earmark-plus"></i> &nbsp;&nbsp;Ajouter un fichier</h5>
                <button class="btn" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="bi bi-x-square text-white"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupFile01">Upload</label>
                        <input type="file" class="form-control" id="inputGroupFile01">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php include_once('php\components\footer.php') ?>