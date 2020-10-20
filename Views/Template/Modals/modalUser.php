<!-- Modal -->
<div class="modal fade" id="modalFormUser" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header headerRegister">
                <h5 class="modal-title" id="titleModalUser">Nuevo Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="formUser" name="formUser" class="form-horizontal">
                    <input type="hidden" name="idUser" id="idUser" value="">
                    <p class="text-primary">Todos los campos son Obligatorios</p>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtNroId">Nro. Identificacion</label>
                            <input id="txtNroId" class="form-control" name="txtNroId" type="text" placeholder="Nro de Identificacion" required="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtNombre">Nombre</label>
                            <input id="txtNombre" class="form-control" name="txtNombre" type="text" placeholder="Nombres de Usuario" required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtApellido">Apellidos</label>
                            <input id="txtApellido" class="form-control" name="txtApellido" type="text" placeholder="Apellidos del Usuario" required="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtNroTelefono">Telefono</label>
                            <input id="txtNroTelefono" class="form-control" name="txtNroTelefono" type="text" placeholder="Telefono del Usuario" required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtEmail">E-mail</label>
                            <input id="txtEmail" class="form-control" name="txtEmail" type="email" placeholder="E-mail del Usuario" required="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txt">Direccion</label>
                            <textarea class="form-control" id="txtDireccion" name="txtDireccion" rows="2" placeholder="Direccion de Domicilio" required=""></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txt">Contraseña</label>
                            <input id="txtContrasenia" class="form-control" name="txtContrasenia" type="password" placeholder="Ingrese Contraseña">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="listRolUser">Roles</label>
                            <select id="listRolUser" class="form-control" data-live-search="true" name="listRolUser" required>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="listStatusUser">Status</label>
                            <select id="listStatusUser" class="form-control selectpicker" name="listStatusUser" required>
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                    </div>

                    <div class="tile-footer">
                        <button id="btnActionFormUser" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg 
                        fa-check-circle">
                            </i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg 
                            fa-check-circle"></i>Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalViewUser" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header header-primary">
                <h5 class="modal-title" id="titleModalUser">Datos del Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Identificacion:</td>
                            <td id="celIdentificacion"></td>
                        </tr>
                        <tr>
                            <td>Nombre:</td>
                            <td id="celNombre"></td>
                        </tr>
                        <tr>
                            <td>Apellidos:</td>
                            <td id="celApellido"></td>
                        </tr>
                        <tr>
                            <td>Telefono:</td>
                            <td id="celTelefono"></td>
                        </tr>
                        <tr>
                            <td>E-mail (Usuario):</td>
                            <td id="celEmail"></td>
                        </tr>
                        <tr>
                            <td>Direccion</td>
                            <td id="celDireccion"></td>
                        </tr>
                        <tr>
                            <td>Tipo Usuario:</td>
                            <td id="celRol"></td>
                        </tr>
                        <tr>
                            <td>Estado:</td>
                            <td id="celStatus"></td>
                        </tr>
                        <tr>
                            <td>Fecha Registro:</td>
                            <td id="celFecha"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">
                <i class="fa fa-fw fa-lg fa-check-circle"></i>Cerrar</button>
            </div>
        </div>
    </div>
</div>