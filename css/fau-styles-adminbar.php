<?php
  header("Content-type: text/css; charset: UTF-8");

  require_once('../../../../wp-config.php');

  if(get_option( 'fau_primary_color') != ""):
    $fau_primary    = get_option( 'fau_primary_color');
  else :
    $fau_primary    = "#3498db";
  endif;
  if(get_option( 'fau_secondary_color') != ""):
    $fau_secondary  = get_option( 'fau_secondary_color');
  else :
    $fau_secondary    = "#2581bf";
  endif;
?>
html.wp-toolbar {
/*padding-top:46px!important*/
}



.admin-bar.masthead-fixed .site-header {
  top: 46px!important;
}

#wpadminbar {
background:<?php echo $fau_primary; ?>;
height:auto
}

#wpadminbar .quicklinks .menupop ul li a:focus,#wpadminbar .quicklinks .menupop ul li a:focus strong,#wpadminbar .quicklinks .menupop ul li a:hover,#wpadminbar .quicklinks .menupop ul li a:hover strong,#wpadminbar .quicklinks .menupop.hover ul li a:focus,#wpadminbar .quicklinks .menupop.hover ul li a:hover,#wpadminbar li .ab-item:focus:before,#wpadminbar li a:focus .ab-icon:before,#wpadminbar li.hover .ab-icon:before,#wpadminbar li.hover .ab-item:before,#wpadminbar li:hover #adminbarsearch:before,#wpadminbar li:hover .ab-icon:before,#wpadminbar li:hover .ab-item:before,#wpadminbar.nojs .quicklinks .menupop:hover ul li a:focus,#wpadminbar.nojs .quicklinks .menupop:hover ul li a:hover {
color:#FFF
}

#wpadminbar ul li {
padding:7px 4px
}

#wpadminbar ul li:hover {
background:<?php echo $fau_secondary; ?>
}

#wpadminbar .menupop .ab-sub-wrapper,#wpadminbar .shortlink-input {
margin-top:7px;
/*left:0*/
}

#wpadminbar .ab-submenu {
padding:0
}

#wpadminbar #adminbarsearch:before,#wpadminbar .ab-icon:before,#wpadminbar .ab-item:before,#wpadminbar #wp-admin-bar-user-info .username {
color:#FFF
}

#wpadminbar .ab-top-menu>li.hover>.ab-item,#wpadminbar .ab-top-menu>li:hover>.ab-item,#wpadminbar .ab-top-menu>li>.ab-item:focus,#wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus {
background:transparent
}

#wpadminbar .menupop .ab-sub-wrapper,#wpadminbar .shortlink-input {
background:<?php echo $fau_primary; ?>
}

#wpadminbar a.ab-item,#wpadminbar>#wp-toolbar span.ab-label,#wpadminbar>#wp-toolbar span.noticon {
color:#FFF!important
}

#wpadminbar ul#wp-admin-bar-root-default>li#wp-admin-bar-wp-logo {
display:none
}

#wpadminbar .quicklinks li#wp-admin-bar-my-account.with-avatar>a img {
float:left;
margin:3px 15px;
width:24px;
height:24px;
border:1px solid #FFF;
border-radius:50%
}

#wpadminbar .dashicons,#wpadminbar .dashicons-before:before {
font-size:30px;
height:30px;
width:30px
}

#wpadminbar a.ab-item .icon:before {
font-size:20px;
vertical-align:middle!important;
padding:6px 4px 0 0
}

#adminmenu .wp-submenu,#adminmenu .wp-has-current-submenu .wp-submenu {
background:#FFF!important
}

#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu {
padding-bottom:0
}

#adminmenu .wp-has-current-submenu ul>li>a {
padding-left:34px
}

#adminmenu .wp-submenu a {
color:#666
}

 #wpadminbar li#wp-admin-bar-lojica-logo {
  display: block;
}


#adminmenu a.lojica-logo div.wp-menu-image img {
    max-width: 55%;
    padding: 8px 0 0;
}

#wpadminbar .lojica-logo a img{

    max-height: inherit;
    transition: all 1s ease-in-out 0s;
    display:block;
    vertical-align:middle;
}
#wpadminbar .lojica-logo a{
    height: auto;
    max-height: 38px;
}

#wpadminbar ul li.lojica-logo {
  padding: 3px;
}

.device-widget #wpadminbar ul li.lojica-logo {
  padding: 11px;
}

.device-widget #adminmenu {
  margin-top: 15px;
}

.logged-in #wpadminbar .quicklinks .ab-empty-item,
.logged-in #wpadminbar .quicklinks > ul > li > a {
  height: 31px;
}

.logged-in #wpadminbar #wp-admin-bar-customize > .ab-item::before,
.logged-in #wpadminbar #wp-admin-bar-edit > .ab-item::before,
.logged-in #wpadminbar #wp-admin-bar-my-account > .ab-item::before,
.logged-in #wpadminbar #wp-admin-bar-my-sites > .ab-item::before,
.logged-in #wpadminbar #wp-admin-bar-site-name > .ab-item::before {
  top:0px;
}
 
.logged-in  #wpadminbar #wp-admin-bar-new-content .ab-icon::before {
    height: 32px !important;
    line-height: initial;
}

.logged-in  #wpadminbar #wp-admin-bar-comments .ab-icon::before {
    height: 32px !important;
    line-height: initial;
}


.logged-in  #wpadminbar .ab-icon {
    height: auto;
}

.logged-in  #wpadminbar .quicklinks li#wp-admin-bar-my-account.with-avatar > a img {
  top:0;
}