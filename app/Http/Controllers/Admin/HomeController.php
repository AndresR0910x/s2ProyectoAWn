<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\evento;
use App\Models\horarioCurso;
use App\Models\horarioEmpleo;
use App\Models\responsabilidadSocial;
use App\Models\servicio;
use App\Models\BolsaEmpleo;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\empleo;
use App\Models\EquipoLiderazgo;

class HomeController extends Controller
{
    //
    public function index()
    {

        $dataEvento = $this->dataEvento()['dataEvento'];
        $dataHorariosCursos = $this->dataHorariosCursos()['dataHorariosCursos'];
        $dataHoraiosEmpleos = $this->dataHoraiosEmpleos()['dataHoraiosEmpleos'];
        $dataResponsabilidadSocial = $this->dataResponsabilidadSocial()['dataResponsabilidadSocial'];
        $dataServicio = $this->dataServicio()['dataServicio'];
        $dataCursos = $this->dataCur()['dataCursos'];
        $dataEmpleos = $this->dataEmpleos()['dataEmpleos'];
        $dataContactos = $this->dataContac()['dataContactos'];
        $dataBE = $this->bolsaEmpleos()['dataBE'];
        $dataEL = $this->dataLiderazgo()['dataEL'];


        return view('admin.index', [
            "dataCursos" => $dataCursos,
            "dataEmpleos" => $dataEmpleos,
            "dataContactos" => $dataContactos,
            "dataBE" => $dataBE,
            "dataEL" => $dataEL,
            "dataEvento" => $dataEvento,
            "dataHorariosCursos" => $dataHorariosCursos,
            "dataHoraiosEmpleos" => $dataHoraiosEmpleos,
            "dataResponsabilidadSocial" => $dataResponsabilidadSocial,
            "dataServicio" => $dataServicio
        ]);
    }
    //Nuevas vistas 
    public function _invoke(){
        return view('eventos');//nombre del archivp
    }
    public function dataEvento()
    {
        $cont = evento::count();
        return ["dataEvento" => $cont];
    }

    public function dataHorariosCursos()
    {
        $cont = horarioCurso::count();
        return (["dataHorariosCursos" => $cont]);
    }

    public function dataHoraiosEmpleos()
    {

        $cont = horarioEmpleo::count();
        return (["dataHoraiosEmpleos" => $cont]);
    }

    public function dataResponsabilidadSocial()
    {

        $cont = responsabilidadSocial::count();
        return (["dataResponsabilidadSocial" => $cont]);
    }

    public function dataServicio()
    {
        $cont = servicio::count();
        return (["dataServicio" => $cont]);
    }
    public function dataCur()
    {
        $cursos = Curso::all();
        $puntos = [];

        foreach ($cursos as $curso) {
            $puntos[] = [
                $curso['nombre_curso'],
                $curso['duracion_curso']
            ];
        }

        return (["dataCursos" => json_encode($puntos)]);
    }

    public function dataEmpleos()
    {
        $empleos = Empleo::all();
        $puntos = [];
        foreach ($empleos as $empleo) {
            $puntos[] = [
                'name' => $empleo['nombre_empleo'],
                'y' => $empleo['vacantes']
            ];
        }
        return (["dataEmpleos" => json_encode($puntos)]);
    }


    public function dataContac()
    {
        $cont = EquipoLiderazgo::count();
        return (["dataContactos" => $cont]);
    }

    public function bolsaEmpleos()
    {
        $bolsaEmpleos = BolsaEmpleo::all();
        $cont = BolsaEmpleo::count();
        return (["dataBE" => $cont]);
    }

    public function dataLiderazgo()
    {
        $cont = EquipoLiderazgo::count();
        return (["dataEL" => $cont]);
    }
}