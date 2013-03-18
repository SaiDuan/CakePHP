<?php

class AppController extends Controller{
	public $components = array(
		'Session',
		'Auth'=>array(
'loginRedirect'=>array('controller' => 'pages', 'action' => 'display'),
'logoutRedirect' => array('controller' => 'pages', 'action' => 'display')

	)

);

public function isAuthorized($user){
	return true;
	}


function uploadFiles($folder, $formdata, $itemId = null)
{
// setup dir names absolute and relative
$folder_url = WWW_ROOT.$folder;
$rel_url = $folder;

// create the folder if it does not exist
if(!is_dir($folder_url)) {
mkdir($folder_url);
}

// if itemId is set create an item folder
if($itemId) {
// set new absolute folder
$folder_url = WWW_ROOT.$folder.'/'.$itemId;
// set new relative folder
$rel_url = $folder.'/'.$itemId;
// create directory
if(!is_dir($folder_url)) {
mkdir($folder_url);
}
}

// list of permitted file types
$permitted = array('image/gif','image/jpeg','image/pjpeg','image/png');

// replace spaces with underscores
$filename = str_replace(' ', '_', $formdata['name']);
// assume filetype is false
$typeOK = false;
// check filetype is ok
foreach($permitted as $type)
{
if($type == $formdata['type'])
{
$typeOK = true;
break;
}
}
// if file type ok upload the file
if($typeOK)
{
// switch based on error code
switch($formdata['error']) {
case 0:
// create full filename
$full_url = $folder_url.'/'.$formdata['name'];
$url = $rel_url.'/'.$formdata['name'];
// upload the file - overwrite existing file
$success = move_uploaded_file($formdata['tmp_name'], $url);

// if upload was successful
if($success)
{
//save the filename of the file
$result['urls'][] = $formdata['name'];
} else
{
$result['errors'][] = "Error uploaded ". $formdata['name']. "Please try again.";
}
break;
case 3:
// an error occurred
$result['errors'][] = "Error uploading ".$formdata['name']." Please try again.";
break;
default:
// an error occurred
$result['errors'][] = "System error uploading ".$formdata['name']. "Contact webmaster.";
break;
}
} elseif($formdata['error'] == 4) {
// no file was selected for upload
$result['nofiles'][] = "No file Selected";
} else {
// unacceptable file type
$result['errors'][] = $formdata['name']." cannot be uploaded. Acceptable file types: gif, jpg, png.";
}

return $result;
}

public function beforeFilter(){
	$this->Auth->allow('index','view','display','forgetpassword','resetpassword');
	$this->set('logged_in', $this->Auth->loggedIn());
	$this->set('current_user', $this->Auth->user());
	}
}

