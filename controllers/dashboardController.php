<?php
require_once __DIR__ . '/../core/Controller.php';

class DashboardController extends Controller {
    public function index() {
        if (session_status() === PHP_SESSION_NONE) session_start();
        
        if (!isset($_SESSION['usuario_id'])) {
            $this->redirect('/peoplepro/public/index.php?action=login');
        }

        $nombre = $_SESSION['usuario'] ?? 'Invitado';
        $this->view('dashboard/index', ['nombre' => $nombre]);
    }
}
