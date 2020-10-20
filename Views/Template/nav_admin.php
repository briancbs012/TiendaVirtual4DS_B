<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= media() ?>/image/avatar.png" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">Brayan <br> Cabascango</p>
            <p class="app-sidebar__user-designation">Administrador</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item" href="<?= base_url() ?>/dashboard">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-user-circle" ></i>
                <span class="app-menu__label">Usaurios</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>/usuarios"><i class="icon fa fa-circle-o"></i> Lista Usuarios</a></li>
                <li><a class="treeview-item" href="<?= base_url() ?>/roles"><i class="icon fa fa-circle-o"></i> Roles</a></li>
                <li><a class="treeview-item" href="<?= base_url() ?>/permisos"><i class="icon fa fa-circle-o"></i> Permisos</a></li>
            </ul>
        </li>
        <li>
            <a class="app-menu__item" href="<?= base_url() ?>/clientes">
                <i class="app-menu__icon fa fa-users" ></i>
                <span class="app-menu__label"> Clientes</span>
            </a>
        </li>
        <li class="treeview">
            <a  class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-product-hunt" ></i>
                <span class="app-menu__label"> Productos</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>/listaProductos"><i class="icon fa fa-circle-o"></i> Lista Productos</a></li>
                <li><a class="treeview-item" href="<?= base_url() ?>/listaCategorias"><i class="icon fa fa-circle-o"></i> Lista Categorias</a></li>
                <li><a class="treeview-item" href="<?= base_url() ?>/companias"><i class="icon fa fa-circle-o"></i> Companias</a></li>
            </ul>
        </li>
        <li><a class="app-menu__item" href="<?= base_url() ?>/pedidos">
                <i class="app-menu__icon fa fa-shopping-cart" ></i>
                <span class="app-menu__label"> Pedidos</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="<?= base_url();?>">
                <i class="app-menu__icon fa fa-sign-out" ></i>
                <span class="app-menu__label"> Salir del Dashboard</span>
            </a>
        </li>
    </ul>
</aside>