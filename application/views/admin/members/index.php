<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

			<div class="content-wrapper">
				<section class="content-header">
					<?php echo $pagetitle; ?>
					<?php echo $breadcrumb; ?>
				</section>

				<section class="content">
					<div class="row">
						<div class="col-md-12">
							 <div class="box">
								<div class="box-header with-border">
									<h3 class="box-title"><?php echo anchor('admin/members/create', '<i class="fa fa-plus"></i> '. lang('members_create_member'), array('class' => 'btn btn-block btn-primary btn-flat')); ?></h3>
								</div>
								<div class="box-body">
									<table class="table table-striped table-hover">
										<thead>
											<tr>
												<th><?php echo lang('members_firstname');?></th>
												<th><?php echo lang('members_lastname');?></th>
												<th><?php echo lang('members_mem_status');?></th>
												<th><?php echo lang('members_grade');?></th>
<!--												<th>--><?php ////echo lang('members_groups');?><!--</th>-->
<!--												<th>--><?php //echo lang('members_status');?><!--</th>-->
												<th><?php echo lang('members_action');?></th>
											</tr>
										</thead>
										<tbody>
<?php foreach ($members as $member):?>
											<tr>
												<td><?php echo htmlspecialchars($member->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
												<td><?php echo htmlspecialchars($member->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
												<td><?php echo htmlspecialchars($member->status, ENT_QUOTES, 'UTF-8'); ?></td>
												<td><?php echo htmlspecialchars($member->grade, ENT_QUOTES, 'UTF-8'); ?></td>
<!--												<td>-->
<?php
//
////foreach ($member->groups as $group)
////{
////
////	// Disabled temporary !!!
////	// echo anchor('admin/groups/edit/'.$group->id, '<span class="label" style="background:'.$group->bgcolor.';">'.htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8').'</span>');
////	echo anchor('admin/groups/edit/'.$group->id, '<span class="label label-default">'.htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8').'</span>');
////}
//
//?>
<!--												</td>-->
<!--												<td>--><?php //echo ($member->active) ? anchor('admin/members/deactivate/'.$member->id, '<span class="label label-success">'.lang('members_active').'</span>') : anchor('admin/members/activate/'. $member->id, '<span class="label label-default">'.lang('members_inactive').'</span>'); ?><!--</td>-->
												<td>
													<?php echo anchor('admin/members/edit/'.$member->id, lang('actions_edit')); ?>
													<?php echo anchor('admin/members/profile/'.$member->id, lang('actions_see')); ?>
												</td>
											</tr>
<?php endforeach;?>
										</tbody>
									</table>
								</div>
							</div>
						 </div>
					</div>
				</section>
			</div>
