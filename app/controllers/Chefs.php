<?php
class Chefs extends Controller
{
    public $chefModel;
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        } else {
            if (isset($_SESSION['user_id'])) {
                if ($_SESSION['role'] != 'chef') {
                    destroyOldSession();
                }
            }
        }
        $this->chefModel = $this->model('Chef');
    }
    public  function Index()
    {
        $data = [];

        $this->view('chef/index');
    }

    public function Order()
    {
        $reservations = $this->chefModel->getOrders();
        $data = [
            'reservations' => $reservations
        ];

        $this->view('chef/order', $data);
    }

    public function getOrders()
    {
        $reservations = $this->chefModel->getOrders();
        header('Content-Type: application/json');
        echo json_encode($reservations);
    }

    public function addToQueue()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $orderID = $_POST['orderID'];
        }
        $this->chefModel->changeOrderStatus($orderID);
    }

    public function startProcessing()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $itemID = $_POST['itemID'];
        }
        $this->chefModel->changeItemStatus($itemID, 'Processing');
    }

    public function markReady()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $itemID = $_POST['itemID'];
        }
        $this->chefModel->changeItemStatus($itemID, 'Ready');
    }

    public function Profile()
    {
        $data = [];

        $this->view('chef/profile');
    }
    public function requestinventory(){
        $inventoreis = $this->chefModel->getinventories();
        $data = [
            'inventories' => $inventoreis,
        ];
        $this->view('chef/requestinventory',$data);
    }
    public function sendinventoryrequest(){
        
        $request_body = file_get_contents('php://input');
        error_log('Request body: ' . print_r($request_body, true));
        $data = json_decode($request_body);
         error_log('Data: ' . print_r($data, true));
    if($this->chefModel->sendinventoryrequest($data)){
        return true;
    }
    else{
        echo "error";
    }

}
}