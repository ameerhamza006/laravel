



public function index(){

$ip = \Request::getClientIp();
$User_Agent = \Request::header('User-Agent');
$get_session = \Request::getSession()->getId();
$get_url = \Request::url();

dd($ip,$User_Agent,$get_session,$get_url);


}
