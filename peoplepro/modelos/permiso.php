modelos/permiso.php <?php
require_once("core/Conexion.php");

class Permiso
{
    private $db;

    public function __construct()
    {
        $this->db = Conexion::getInstancia()->getConexion();
    }

    public function obtenerTodos()
    {
        $stmt = $this->db->prepare("SELECT * FROM permisos");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM permisos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($empleado_id, $tipo_permiso, $fecha_inicio, $fecha_fin, $motivo)
    {
        $stmt = $this->db->prepare("INSERT INTO permisos (empleado_id, tipo_permiso, fecha_inicio, fecha_fin, motivo) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$empleado_id, $tipo_permiso, $fecha_inicio, $fecha_fin, $motivo]);
    }

    public function editar($id, $empleado_id, $tipo_permiso, $fecha_inicio, $fecha_fin, $motivo, $estado, $comentarios)
    {
        $stmt = $this->db->prepare("UPDATE permisos SET empleado_id = ?, tipo_permiso = ?, fecha_inicio = ?, fecha_fin = ?, motivo = ?, estado = ?, comentarios = ? WHERE id = ?");
        return $stmt->execute([$empleado_id, $tipo_permiso, $fecha_inicio, $fecha_fin, $motivo, $estado, $comentarios, $id]);
    }

    public function eliminar($id)
    {
        $stmt = $this->db->prepare("DELETE FROM permisos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}