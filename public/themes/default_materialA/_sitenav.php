<nav  class="navbar">

<div class="container-fluid">
            <div class="navbar-header">
<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
<a href="javascript:void(0);" class="bars"></a>
<a class="navbar-brand"><?php e(class_exists('Settings_lib') ? settings_item('site.title') : 'Bonfire'); ?></a>
</div>
<div class="navbar-collapse" id="navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
        <li <?php echo check_class('home'); ?>><a href="<?php echo site_url(); ?>"><?php e(lang('bf_home')); ?></a></li>
        <?php if (empty($current_user)) : ?>
        <li><a href="<?php echo site_url(LOGIN_URL); ?>">Sign In</a></li>
        <?php else : ?>
        <li <?php echo check_method('profile'); ?>><a href="<?php echo site_url('users/profile'); ?>"><?php e(lang('bf_user_settings')); ?></a></li>
        <li><a href="<?php echo site_url('logout'); ?>"><?php e(lang('bf_action_logout')); ?></a></li>
        <?php endif; ?>
        <?php if ( has_permission('Bonfire.UI.View') && has_permission('Bonfire.UI.Manage') ): ?>
         <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
         <?php endif; ?>
    </ul>
    </div> 
</div>
</nav>
<?php if (!empty($current_user)) : ?>
<style>
section.content {
    margin: 100px 15px 0 315px;
  
}
</style>
<?php endif; ?>
<?php if (empty($current_user)) : ?>
<style>
section.content {
    margin: 100px 15px 0 15px;
   
}
</style>
<?php endif; ?>
<?php if (!empty($current_user)) : ?>
<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
            <div class="nav pull-right" id="user-menu">
                        <div class="btn-group">
                            <a href="<?php echo site_url(SITE_AREA . '/settings/users/edit'); ?>" id="tb_email" class="btn dark" title="<?php echo lang('bf_user_settings'); ?>">
                                <?php
                                $userDisplayName = isset($current_user->display_name) && ! empty($current_user->display_name) ? $current_user->display_name : ($this->settings_lib->item('auth.use_usernames') ? $current_user->username : $current_user->email);
                                echo $userDisplayName;
                                ?>
                            </a>
                        </div>
                    </div>
                <div class="image" style="width:48px; height:48px;">
              
                     <?php echo gravatar_link($current_user->email, 96, null, $userDisplayName); ?>
                                       
                   <!-- <img src="<?/*php echo img_path(); */?>images/user.png" width="48" height="48" alt="User"> -->
                </div>
                <div class="info-container">
                
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $userDisplayName; ?></div>
                    <div class="email"> <?php e($current_user->email); ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                        <li> <a href="<?php echo site_url('users/profile'); ?>" class=" waves-effect waves-block"><i class="material-icons">person</i>Profile</a></li>
                          <!--  <li><a href="<?php echo site_url(SITE_AREA . '/settings/users/edit'); ?>" class=" waves-effect waves-block"><i class="material-icons">person</i>Profile</a></li>-->
                            <li role="seperator" class="divider"></li>
                           <!-- <li><a href="javascript:void(0);" class=" waves-effect waves-block"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>-->
                            <li><a href="<?php echo site_url('logout'); ?>" class=" waves-effect waves-block"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 385px;"><ul class="list" style="overflow: hidden; width: auto; height: 385px;">
                    <li class="header">MAIN NAVIGATION</li>
                   
       
                    <li class="active">
                        <a href="<?php echo site_url(); ?>" class="toggled waves-effect waves-block">
                            <i class="material-icons">home</i>
                            <span><?php e(lang('bf_home')); ?></span>
                        </a>
                    </li>
                   
                    <?php if (empty($current_user)) : ?>
                    <li>
                        <a href="<?php echo site_url(LOGIN_URL); ?>">
                            <i class="material-icons">person</i>
                            <span>Sign In</span>
                        </a>
                    </li>
                    <?php else : ?>
                    <li <?php echo check_method('profile'); ?>>
                    
                        <a href="<?php echo site_url('users/profile'); ?>">
                        <i class="material-icons">person</i>
                        <span><?php e(lang('bf_user_settings')); ?></span>
                        </a>
                    </li>
                    <li>
                    <a href="<?php echo site_url('logout'); ?>">
                  
                        <span><?php e(lang('bf_action_logout')); ?></span>
                    </a>
                    </li>
                     <?php endif; ?>
                </ul><div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.5); width: 4px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 0px; z-index: 99; right: 1px; height: 159.382px;"></div><div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    © 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
</section>
        <?php endif; ?>
        <!-- #END# Left Sidebar -->
      <!-- Right Sidebar -->

       <?php if ( has_permission('Bonfire.UI.View') && has_permission('Bonfire.UI.Manage') ): ?>
                                   
				  
      <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>   <?php endif; ?>
        <!-- #END# Right Sidebar -->
    </section>
 