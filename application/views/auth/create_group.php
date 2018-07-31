
<?php $this->load->view('partials/header') ;
$this->load->view('partials/navbar');
?>
<?php if($_SESSION['role']=="hrd") {
  $this->load->view('partials/sidebarhrd');
}
else
  $this->load->view('partials/sidebar') 
?>

      <div class="main-panel">
      <div class="content">
        <div class="container-fluid">
          
        
                <div class="card">
           <div class="form-group">

<h1><?php echo lang('create_group_heading');?></h1>
<p><?php echo lang('create_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_group");?>

      <p>
            <?php echo lang('create_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo lang('create_group_desc_label', 'description');?> <br />
            <?php echo form_input($description);?>
      </p>

      <p><?php echo form_submit('submit', lang('create_group_submit_btn'));?></p>

<?php echo form_close();?>

<?php $this->load->view('partials/footer') ?>