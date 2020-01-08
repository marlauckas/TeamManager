<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scouting extends Admin_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('admin/Scouting_model');
		/* Load :: Common */
		$this->lang->load('admin/scouting');

		/* Title Page :: Common */
		$this->page_title->push(lang('menu_scouting'));
		$this->data['pagetitle'] = $this->page_title->show();

		/* Breadcrumbs :: Common */
		$this->breadcrumbs->unshift(1, lang('menu_scouting'), 'admin/scouting');
	}

	public function index()
	{
		if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
		{
			redirect('auth/login', 'refresh');
		}
		else
		{
			/* Breadcrumbs */
			$this->data['breadcrumb'] = $this->breadcrumbs->show();

			/* Get all users */
//			$this->data['members'] = $this->Members_model->get_members();
//			foreach ($this->data['members'] as $k => $member)
//			{
//				$this->data['members'][$k]->groups = $this->ion_auth->get_users_groups($member->id)->result();
//			}

			/* Load Template */
			$this->template->admin_render('admin/members/index', $this->data);
		}
	}


}
