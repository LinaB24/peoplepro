<?php

class HomeController {
    public function index() {
        echo "<h1>Menú Principal</h1>";
        echo "<ul>";
        echo "<li><a href='/peoplepro/public/usuario/index'>Usuarios</a></li>";
        echo "<li><a href='/peoplepro/public/permiso/index'>Permisos</a></li>";
        echo "<li><a href='/peoplepro/public/beneficio/index'>Beneficios</a></li>";
        echo "<li><a href='/peoplepro/public/visitante/index'>Visitantes Externos</a></li>";
        echo "<li><a href='/peoplepro/public/documento/index'>Documentos</a></li>";
        echo "<li><a href='/peoplepro/public/capacitacion/index'>Capacitaciones</a></li>";
        echo "<li><a href='/peoplepro/public/evaluacion/index'>Evaluaciones</a></li>";
        echo "</ul>";
    }
}
