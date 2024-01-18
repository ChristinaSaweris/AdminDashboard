<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{url('Syndron/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Syndron</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                <li> <a href="{{ url('admin/dashboard') }}"><i class="bx bx-right-arrow-alt"></i>Admin Dashboard</a>
                </li>
            </ul>
        </li>
        <li class="menu-label">UI Elements</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">eCommerce</div>
            </a>
            <ul>
                <li> <a href="{{ url('admin/categories') }}"><i class="bx bx-right-arrow-alt"></i>Categories</a>
                </li>
                <li> <a href="{{ url('admin/view_add_category') }}"><i class="bx bx-right-arrow-alt"></i>Add New Category</a>
                </li>
                <li> <a href="{{ url('admin/products') }}"><i class="bx bx-right-arrow-alt"></i>Products</a>
                </li>
                <li> <a href="{{ url('admin/view_add_product') }}"><i class="bx bx-right-arrow-alt"></i>Add New Products</a>
                </li>
                <li> <a href="{{ url('admin/customers') }}"><i class="bx bx-right-arrow-alt"></i>Customers</a>
                </li>
                <li> <a href="{{ url('admin/orders') }}"><i class="bx bx-right-arrow-alt"></i>Orders</a>
                </li>
                <li> <a href="{{ url('admin/safe') }}"><i class="bx bx-right-arrow-alt"></i>Safe</a>
                </li>
            </ul>
        </li>
        <li class="menu-label">Pages</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-lock"></i>
                </div>
                <div class="menu-title">Settings</div>
            </a>
            <ul>
                <li> <a href="{{ url('admin/update_password') }}"><i class="bx bx-right-arrow-alt"></i>Update Admin Password</a>
                </li>
                <li> <a href="{{ url('admin/update_admin_details') }}"><i class="bx bx-right-arrow-alt"></i>Update Admin Details</a>
                </li>
                <li><a class="dropdown-item" href="{{ url('admin/logout') }}"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
