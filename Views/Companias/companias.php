<?php
headerAdmin($data);
// getModal('modalRoles', $data);
?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-user-tag"></i> <?= $data['page_title']; ?>
                <button id="buttonSwal" class="btn btn-primary" type="button" onclick="openModal();"><i class="fas fa-plus-circle"></i> Nuevo</button>
            </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>/roles"><?= $data['page_title']; ?></a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="tableUsuarios">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NOMBRE COMPANIA</th>
                                    <th>DIRECCION</th>
                                    <th>TELEFONO</th>
                                    <th>EMAIL</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nestle</td>
                                    <td>Nestle, Cayambe</td>
                                    <td> 02-3986500</td>
                                    <td>nestle_cayambe@nestle.com.ec</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php footerAdmin($data); ?>