<div class="navbar">
    <div class="navbar-header">
      <div class="basic-wrapper">
        <div class="navbar-brand"> <a href="dashboard"><img src="#" srcset="<?php echo base_url();?>assets/images/logo.png 1x, <?php echo base_url();?>assets/images/logo@2x.png 2x" class="logo-light" alt="" /><img src="#" srcset="<?php echo base_url();?>assets/images/logo-dark.png 1x, <?php echo base_url();?>assets/images/logo-dark@2x.png 2x" class="logo-dark" alt="" /></a> </div>
        <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a> </div>
      <!-- /.basic-wrapper --> 
    </div>
    <!-- /.navbar-header -->
    <nav class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="current"><?php echo anchor('dashboard','Home');?></li>
        <li><?php echo anchor('car','Car List');?></li>
        <li><?php echo anchor('classi','Classification');?></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle js-activated">Admin <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo anchor('admin','Admin Data');?></li>
            <li><?php echo anchor('transaction','Transaction');?></li>
            <li><?php echo anchor('transaction/laporan','Report');?></li>
          </ul>
        </li>
      </ul>
      <!-- /.navbar-nav --> 
    </nav>
    <!-- /.navbar-collapse -->
    
    <div class="social-wrapper">
       <ul class="nav navbar-nav navbar-right">
       <li><?php echo anchor('auth/logout','Logout');?></li>
      </ul>
      <!-- /.social --> 
    </div>
    <!-- /.social-wrapper --> 
  </div>