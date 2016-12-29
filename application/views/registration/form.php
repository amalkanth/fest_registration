
<h3>this is your registration form for the event</h3>

<div id="container">
<?php echo form_open('Registration'); ?>
<?php echo validation_errors();?>
<?php $hidden=array('reg_time'=> date("Y-m-d H:i:s")); ?> 
<?php echo form_fieldset('Name :'); ?>
<?php echo form_input(array('id' => 'name', 'name' => 'name' 
                              ,'style'=>'width:150px')); 
echo form_fieldset_close();

?></br></br></br>
<?php echo form_fieldset('email :'); ?>
<?php echo form_input(array('id' => 'email', 'name' => 'email'));echo form_fieldset_close();
 ?></br></br></br>
<?php echo form_fieldset('Mobile No. :'); ?>
<?php echo form_input(array('id' => 'mob_number', 'name' => 'mob_number'));
echo form_fieldset_close(); ?></br></br></br>
<?php echo form_fieldset('college :'); ?>
<?php echo form_input(array('id' => 'college', 'name' => 'college')); 
echo form_fieldset_close();?></br></br></br>
<?php echo form_fieldset('branch :'); ?>
<?php echo form_input(array('id' => 'branch', 'name' => 'branch')); 
echo form_fieldset_close();?></br></br></br>
<?php echo form_fieldset('year :'); ?>
<?php $year=array(
             'I yr' => 'I yr',
             'II yr' => 'II yr',
             'III yr' => 'III yr',
             'IV yr' => 'IV yr');
echo form_fieldset_close();?>
<?php echo form_dropdown('year',$year,'I yr');
echo form_fieldset_close();?> </br></br></br>         

<?php echo form_fieldset('event :');
 ?>
<?php $events=array(
				'hackathon' => 'hackathon',
				'yantrik' => 'yantrik',
				'kludge' => 'kludge',
				'robowars' => 'robowars',
				'maker summit' => 'maker summit');?>
<?php echo form_dropdown('event',$events,'hackathon');
echo form_fieldset_close();?></br></br></br>     
<?php echo form_fieldset('number of members in the group(for group event) :'); ?>
	<?php 	$grp=array(
					'1' => '1',
					'2' => '2',
					'3' => '3',
					'4' => '4');?>
					
					
<?php echo form_dropdown('no_of_members',$grp,'1');
echo form_fieldset_close();?> </br></br></br>
<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?>
</div>