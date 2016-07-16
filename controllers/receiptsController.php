<?php

class ReceiptsController {
    public function receipt() {
        require_once('views/pages/receipts.php');
    }

    public function error() {
        require_once('views/pages/error.php');
    }
}