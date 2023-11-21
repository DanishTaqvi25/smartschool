
<aside class="main-sidebar" id="alert2">

	
    <?php if ($this->rbac->hasPrivilege('student', 'can_view')) { ?>
        <form class="navbar-form navbar-left search-form2" role="search"  action="<?php echo site_url('admin/admin/search'); ?>" method="POST">
            <?php echo $this->customlib->getCSRF(); ?>
            <div class="input-group ">

                <input type="text"  name="search_text" class="form-control search-form" placeholder="<?php echo $this->lang->line('search_by_student_name'); ?>">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" style="padding: 3px 12px !important;border-radius: 0px 30px 30px 0px; background: #fff;" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
    <?php } ?>
	<style>
	.fnts{
		/*font-family: "IBM Plex Sans", sans-serif;*/
		font-family: IBM Plex Sans, sans-serif;
	}
	</style>
    <section class="sidebar" id="sibe-box">
        <?php // $this->load->view('layout/top_sidemenu'); ?>
        <ul class="sidebar-menu verttop">
		
            <?php
            if ($this->module_lib->hasActive('front_office')) {
                if (($this->rbac->hasPrivilege('admission_enquiry', 'can_view') ||
                        $this->rbac->hasPrivilege('visitor_book', 'can_view') ||
                        $this->rbac->hasPrivilege('phon_call_log', 'can_view') ||
                        $this->rbac->hasPrivilege('postal_dispatch', 'can_view') ||
                        $this->rbac->hasPrivilege('postal_receive', 'can_view') ||
                        $this->rbac->hasPrivilege('complaint', 'can_view') ||
                        $this->rbac->hasPrivilege('setup_font_office', 'can_view'))) {
                    ?>

                    <li class="treeview active <?php echo set_Topmenu('front_office'); ?>">
                        <a href="#">
                            <span style="text-transform: uppercase;letter-spacing:0.1px;font-family: 'Roboto Condensed';"><?php echo $this->lang->line('front_office'); ?></span> 
                        </a>
                        <ul style="margin-top:-10px;" class="treeview-menu">
						

                            <?php if ($this->rbac->hasPrivilege('admission_enquiry', 'can_view')) { ?>

                                <li class="<?php echo set_Submenu('admin/enquiry'); ?>"><a class="fnts" href="<?php echo base_url(); ?>admin/enquiry"><i style="margin-right:15px;" class="fa fa-ioxhost ftlayer "></i><?php echo $this->lang->line('admission_enquiry'); ?> </a></li>

                                <?php
                            }
                            if ($this->rbac->hasPrivilege('visitor_book', 'can_view')) {
                                ?>
                                <li class="<?php echo set_Submenu('admin/visitors'); ?>"><a class="fnts" href="<?php echo base_url(); ?>admin/visitors"><i style="margin-right:15px;" class="fa fa-ioxhost ftlayer"></i> <?php echo $this->lang->line('visitor_book'); ?></a></li>

                                <?php
                            }
                            if ($this->rbac->hasPrivilege('phone_call_log', 'can_view')) {
                                ?>

                                <li class="<?php echo set_Submenu('admin/generalcall'); ?>"><a class="fnts" href="<?php echo base_url(); ?>admin/generalcall"><i style="margin-right:15px;" class="fa fa-ioxhost ftlayer"></i> <?php echo $this->lang->line('phone_call_log'); ?></a></li>

                                <?php
                            }
                            if ($this->rbac->hasPrivilege('postal_dispatch', 'can_view')) {
                                ?>

                                <li class="<?php echo set_Submenu('admin/dispatch'); ?>"><a class="fnts" href="<?php echo base_url(); ?>admin/dispatch"><i style="margin-right:15px;" class="fa fa-ioxhost ftlayer"></i> <?php echo $this->lang->line('postal_dispatch'); ?></a></li>

                                <?php
                            }
                            if ($this->rbac->hasPrivilege('postal_receive', 'can_view')) {
                                ?>

                                <li class="<?php echo set_Submenu('admin/receive'); ?>"><a class="fnts" href="<?php echo base_url(); ?>admin/receive"><i style="margin-right:15px;" class="fa fa-ioxhost ftlayer"></i> <?php echo $this->lang->line('postal_receive'); ?></a></li>

                                <?php
                            }
                            if ($this->rbac->hasPrivilege('complaint', 'can_view')) {
                                ?>

                                <li class="<?php echo set_Submenu('admin/complaint'); ?>"><a class="fnts" href="<?php echo base_url(); ?>admin/complaint"><i style="margin-right:15px;" class="fa fa-ioxhost ftlayer"></i> <?php echo $this->lang->line('complain'); ?></a></li>

                                <?php
                            }
                            if ($this->rbac->hasPrivilege('setup_font_office', 'can_view')) {
                                ?>

                                <li class="<?php echo set_Submenu('admin/visitorspurpose'); ?>"><a class="fnts" href="<?php echo base_url(); ?>admin/visitorspurpose"><i style="margin-right:15px;" class="fa fa-ioxhost ftlayer"></i> <?php echo $this->lang->line('setup_front_office'); ?></a></li>

                            <?php } ?>
                        </ul>
                    </li>
                    <?php
                }
            }

			?>
			
			
			
			
			
			
			<?php
			if ($this->module_lib->hasActive('alumni')) {
			if (($this->rbac->hasPrivilege('manage_alumni', 'can_view')) || ($this->rbac->hasPrivilege('events', 'can_view'))) {
			?>
                    <li class="treeview active <?php echo set_Topmenu('alumni'); ?>">
                        <a href="#">
                            <span style="text-transform: uppercase;letter-spacing:0.1px;font-family: 'Roboto Condensed';" ><?php echo $this->lang->line('alumni'); ?></span> 
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($this->rbac->hasPrivilege('manage_alumni', 'can_view')) { ?>
                                <li class="<?php echo set_Submenu('alumni/alumnilist'); ?>"><a class="fnts" href="<?php echo base_url(); ?>admin/alumni/alumnilist"><i style="margin-right:15px;" class="fa fa-ioxhost ftlayer"></i> <?php echo $this->lang->line('manage_alumini'); ?></a></li>
						<?php } ?>
						<?php if ($this->rbac->hasPrivilege('events', 'can_view')) { ?>
                                <li class="<?php echo set_Submenu('alumni/event'); ?>"><a class="fnts" href="<?php echo base_url(); ?>admin/alumni/events"><i style="margin-right:15px;font-size:13px;" class="fa fa-ioxhost ftlayer"></i> <?php echo $this->lang->line('events'); ?></a></li>
						<?php } ?>

                        </ul>
                    </li>
                <?php }
            }
            ?>
            <?php
           
?>
        </ul>
    </section>
</aside>