<?php include_once('php/components/header.php') ?>
<main class="home-section container ">
    <div class="row">
        <section class="col-lg-12 d-flex align-items-center justify-content-end mt-5" id="search-user-box">
            <div class="search-user col-sm-5 d-flex justify-content-center ">
                <input class="form-control " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" type="search" name="search-friend" id="search-friend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="bi bi-search bg-transparent text-white rounded"></i></span>

            </div>
            <div class="search-user d-flex ms-2  col-sm-1">
                <i class="bi bi-grid-fill ms-auto text-white me-2 fs-2 grid-card"></i>
                <i class="bi bi-list-task fs-2 text-white list-card"></i>
            </div>
        </section>
    </div>
    <div class="row">
        <section class="col-lg-12 " id="user-result-list">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">Avatar</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Rang</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <td class="align-middle">
                            <img class="avatar rounded-circle" src="../../stylesheets/contents/images/users/default-avatar.jpg" alt="avatar utilisateur">
                        </td>
                        <td class="align-middle">
                            Prem
                        </td>
                        <td class="align-middle">
                            Shashi
                        </td>
                        <td class="align-middle">
                            <img class="badges" src="../../stylesheets/contents/images/badges/06- Legendary Rank.png" alt="rang utilisateur" />
                        </td>
                        <td class="align-middle">
                            <div class="btn-group">
                                <button type="button" class="btn dropdown-toggle btn-primary " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical "></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item" type="button">Action</button>
                                    <button class="dropdown-item" type="button">Another action</button>
                                    <button class="dropdown-item" type="button">Something else here</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section id="user-result-grid">
            <div class="row row-cols-1 row-cols-md-4 g-5">
                <div class="col">
                    <div class="card h-100 ">
                        <div class="card-header w-100 p-1">
                            <a href=""> <img src="../../stylesheets/contents/images/users/default-avatar.jpg" class="avatar card-img-top rounded-circle p-2" alt="avatar"></a>
                            <h5 class="card-title">Prem Shashi</h5>
                            <img class="badges me-2" src="../../stylesheets/contents/images/badges/06- Legendary Rank.png" alt="rang utilisateur" />
                            <div class="btn-group">
                                <button type="button" class="btn dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                </div>
            </div>
        </section>
    </div>
</main>
<?php include_once('php/components/footer.php') ?>