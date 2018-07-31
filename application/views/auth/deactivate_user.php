
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


<h1><?php echo lang('deactivate_heading');?></h1>
<p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

<?php echo form_open("auth/deactivate/".$user->id);?>
<p>

  	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
    <input type="radio" name="confirm" value="yes" checked="checked" />

    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
    <input type="radio" name="confirm" value="no" />


  <?php echo form_hidden($csrf); ?>
  <?php echo form_hidden(array('id'=>$user->id)); ?>
  </p>

  <p><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></p>

<?php echo form_close();?>

<?php $this->load->view('partials/footer') ?>