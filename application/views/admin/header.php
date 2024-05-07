
<!-- Page Loader -->

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.html"><img src="<?php echo base_url().'admin/assets/images/logo.png'?>" width="25" alt="Aero"><span class="m-l-10">Nobo IT</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="<?php echo base_url().'admin/assets/images/mosarf.jpeg'?>" alt="User"></a>
                    <div class="detail">
                        <h4>Mosarf</h4>
                        <small>Super Admin</small>
                    </div>
                </div>
            </li>
            <li><a href="index.html"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            
            
            <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Product Management</span></a>
                <ul class="ml-menu">
                    <li class=""><a href="<?php echo base_url()?>admin/category">Category setup</a></li>
                    <li class=""><a href="<?php echo base_url()?>admin/product">Product Add</a></li>
                    <li class=""><a href="<?php echo base_url()?>admin/product-list">Product List</a></li>                    
                </ul>
            </li>
        </ul>
    </div>
</aside>
