
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
        <div class="card">
          <div class="form-group">


<h1><?php echo lang('edit_group_heading');?></h1>
<p><?php echo lang('edit_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(current_url());?>

      <p class="form_input">
            <?php echo lang('edit_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo lang('edit_group_desc_label', 'description');?> <br />
            <?php echo form_input($group_description);?>
      </p>

      <p><?php echo form_submit('submit', lang('edit_group_submit_btn'));?></p>

<?php echo form_close();?>
<?php $this->load->view('partials/footer') ?>