<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item <?php if ($page_name == 'dashboard') echo 'active'; ?>">
    <a class="nav-link" href="<?php echo base_url(); ?>admin/dashboard">
      <i class="fa fa-desktop"></i>
      <span><?php echo 'Dashboard'; ?></span>
    </a>
  </li>
  <li class="nav-item <?php if ($page_name == 'manage_invoice') echo 'active'; ?>">
    <a class="nav-link" href="<?php echo base_url(); ?>admin/invoice">
      <i class="fa fa-envelope"></i>
      <span><?php echo 'Manage Photo'; ?></span>
    </a>
  </li>
  <li class="nav-item <?php if ($page_name == 'invoice_items') echo 'active'; ?>">
    <a class="nav-link" href="<?php echo base_url(); ?>admin/sales">
      <i class="fa fa-tasks"></i>
      <span><?php echo 'Manage Sales'; ?></span>
    </a>
  </li>
  <li class="nav-item <?php if ($page_name == 'manage_photo_info') echo 'active'; ?>">
    <a class="nav-link" href="<?php echo base_url(); ?>admin/pricing">
      <i class="fa fa-pencil"></i>
      <span><?php echo 'Pricing Info'; ?></span>
    </a>
  </li>

  <li class="nav-item <?php if ($page_name == 'manage_customer') echo 'active'; ?>">
    <a class="nav-link" href="<?php echo base_url(); ?>admin/customer">
      <i class="fa fa-users"></i>
      <span><?php echo 'Manage Customers'; ?></span>
    </a>
  </li>

  <!-- Debt -->
  <li class="nav-item <?php if ($page_name == 'manage_debt') echo 'active'; ?> ">
    <a class="nav-link" href="<?php echo base_url(); ?>admin/customer_record_debt">
      <i class="fas fa-fw fa fa-list"></i>
      <span><?php echo 'Manage Debt'; ?></span>
    </a>
  </li>

  <!-- ACCOUNT -->
  <li class="nav-item <?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
    <a class="nav-link" href="<?php echo base_url(); ?>admin/profile">
      <i class="fas fa-fw fa fa-user"></i>
      <span><?php echo 'Staff Profile'; ?></span>
    </a>
  </li>

  <!-- SETTINGS -->
  <li class="nav-item <?php if ($page_name == 'sys_settings') echo 'active'; ?> ">
    <a class="nav-link" href="<?php echo base_url(); ?>admin/settings">
      <i class="fa fa-gears"></i>
      <span> <?php echo 'System Settings'; ?></span>
    </a>
   </li>
</ul>
