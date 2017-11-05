<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

class w_events_c_admin extends Controller
{
	public function events($settings = [])
	{
		return $this->view('admin_events', [
			'type_id' => isset($settings['type_id']) ? $settings['type_id'] : 0,
			'types'   => $this->model('types')->get_types()
		]);
	}

	public function event($settings = [])
	{
		return $this->view('admin_event', [
			'event_id' => isset($settings['event_id']) ? $settings['event_id'] : 0,
			'events'   => $this->model()->get_events()
		]);
	}
}