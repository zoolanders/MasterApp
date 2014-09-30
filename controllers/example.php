<?php

class ExampleController extends AppController {

	public function cool() {
		echo json_encode('Do Something Cool!');
		return;
	}
}