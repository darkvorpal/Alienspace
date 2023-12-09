<?php include_once('php\components\header.php') ?>
<main class="home-section container ">
    <div class="row mt-5">
        <div class="col-md-6  list-user-chat">
            <div class="input-group mt-2 mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-2">
                        <img src="../../stylesheets/contents/images/users/default-avatar.jpg" class="img-fluid rounded-start" alt="avatar">
                        <span class="position-absolute top-0 start-25 translate-middle p-2 bg-success border border-light rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                        </span>
                    </div>
                    <div class="col-10">
                        <div class=" card-header p-0">
                            <h6 class="mt-2 mb-0">Prem Shashi <span class="badge bg-danger ms-2">2</span></h6>
                        </div>
                        <div>
                            <p><small>Vous a envoyer une publication ...</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 card message-box p-0">
            <div class="card-header">

            </div>
            <div class="card-body"></div>
            <div class="card-footer">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Ecrire ici ..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-send-fill"></i></button>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once('php\components\footer.php') ?>