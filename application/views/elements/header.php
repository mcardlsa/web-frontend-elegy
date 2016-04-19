<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<title><?php echo $title; ?> | Elegy - the Funeral Planning App</title>

<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous" type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.4.5/jquery.datetimepicker.css">  
<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css">
<!-- CSS -->

<!-- JS -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/js/custom.js');?>"></script>
<!-- JS -->
</head>
<body>
<header>
    <div class="width">
        
        <nav class="navbar navbar-elegy">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#elegy-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo site_url();?>"><img src="<?php echo base_url('assets/images/logo-beta.png');?>" width="100%"></a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="elegy-navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="visible-xs"><a id="getKeepsake" href="https://geo.itunes.apple.com/us/app/elegyapp/id1077723872?mt=8" target="_blank">Get Keepsake</a></li>
                <li class="dropdown navbar-funeral visible-xs">
                  <a href="#" class="dropdown-toggle navbar-text" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Funeral of <strong><?php echo $funeral_detail['name']; ?></strong> <span class="caret"></span></a>
                    <ul id="navbar-funeral" class="dropdown-menu">
                      <li><a href="<?php echo site_url('funeral/memorial/'.$funeral_detail['funeralId']);?>">Eulogy</a></li>
                      <li <?php if($this->router->fetch_class() =="funeral" && $this->router->fetch_method() =="create_feed") echo "class='active'";?>><a href="<?php echo site_url('funeral/create_feed/'.$funeral_detail['funeralId']);?>" >Remember</a></li>
                      <li <?php if($this->router->fetch_class() =="funeral" && $this->router->fetch_method() =="schedule") echo "class='active'";?>><a href="<?php echo site_url('funeral/schedule');?>" >Schedule</a></li>
                      <li <?php if($this->router->fetch_class() =="funeral" && $this->router->fetch_method() =="gallery") echo "class='active'";?>><a href="<?php echo site_url('funeral/gallery');?>" >Gallery</a></li>
                      <li <?php if($this->router->fetch_class() =="funeral" && $this->router->fetch_method() =="program") echo "class='active'";?>><a href="<?php echo site_url('funeral/program');?>" >Program</a></li>
                        <?php if ($this->user_auth->is_logged_in()) : ?>
                      <li <?php if($this->router->fetch_class() =="funeral" && $this->router->fetch_method() =="add_journal" ||$this->router->fetch_method() =="update_journal") echo "class='active'";?>><a href="<?php echo site_url('funeral/add_journal');?>" >Journal</a></li>
                        <?php if ($this->user_auth->is_logged_in() && $userId==$hostId): ?>
                      <li <?php if($this->router->fetch_class() =="funeral" && $this->router->fetch_method() =="update_funeral") echo "class='active'";?>><a href="<?php echo site_url('funeral/update_funeral/'.$funeral_detail['funeralId']);?>" >Configure</a></li>
                          <?php endif;  endif;?>
                    </ul>
                </li>
                <li <?php if($this->router->fetch_class() =="app" && $this->router->fetch_method() =="features") echo "class='active'";?>><a href="<?php echo site_url('app/features');?>" >Features</a></li>
                <li <?php if($this->router->fetch_class() =="app" && $this->router->fetch_method() =="about_us") echo "class='active'";?>><a href="<?php echo site_url('app/about');?>" >About</a></li>
                <li class="hidden-xs"><a id="getKeepsake" href="https://geo.itunes.apple.com/us/app/elegyapp/id1077723872?mt=8" target="_blank">Get Keepsake</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('funeral/find_funeral');?>">Find a Funeral</a></li>
                <?php if ($this->user_auth->is_logged_in()) : ?>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('user/change_password');?>">Settings</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo site_url('user/logout');?>">Sign Out</a></li>
                  </ul>
                </li>
                <?php else :?> 
                <li><a href="<?php echo site_url('user/login');?>">Sign In</a></li>
                <?php endif; ?>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

    </div>
</header>
 <?php if($this->router->fetch_class() =="funeral" && $this->router->fetch_method() =="create_feed" || $this->router->fetch_method() =="program" || $this->router->fetch_method() =="schedule" || $this->router->fetch_method() =="add_journal" || $this->router->fetch_method() =="update_journal" || $this->router->fetch_method() =="memorial" ||$this->router->fetch_method() =="gallery") :?>
   <div class="row"> 
       <?php endif; ?>