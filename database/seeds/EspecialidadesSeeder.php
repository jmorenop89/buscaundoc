<?php

use Illuminate\Database\Seeder;

class EspecialidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("especialidad")->delete();
        DB::table("especialidad")->insert(
            [
            array(
                'nombre'=>"Ginecólogo",
            ),
            array(
                'nombre'=>"Traumatólogo y Ortopedista",
            ),
            array(
                'nombre'=>"Dermatólogo",
            ),
            array(
                'nombre'=>"Pediatra",
            ),
            array(
                'nombre'=>"Cirujano general",
            ),
            array(
                'nombre'=>"Gastroenterólogo",
            ),
            array(
                'nombre'=>"Urólogo",
            ),
            array(
                'nombre'=>"Oftalmólogo",
            ),
            array(
                'nombre'=>"Neurólogo",
            ),
            array(
                'nombre'=>"Otorrino",
            ),
            array(
                'nombre'=>"Psiquiatra",
            ),
            array(
                'nombre'=>"Endocrinólogo",
            ),
            array(
                'nombre'=>"Neumólogo",
            ),
            array(
                'nombre'=>"Cardiólogo",
            ),
            array(
                'nombre'=>"Neurocirujano",
            ),
            array(
                'nombre'=>"Internista",
            ),
            array(
                'nombre'=>"Psicólogo",
            ),
            array(
                'nombre'=>"Reumatólogo",
            ),
            array(
                'nombre'=>"Médico general",
            ),
            array(
                'nombre'=>"Cirujano plástico",
            ),
            array(
                'nombre'=>"Nefrólogo",
            ),
            array(
                'nombre'=>"Cirujano cardiovascular y torácico",
            ),
            array(
                'nombre'=>"Cirujano maxilofacial",
            ),
            array(
                'nombre'=>"Oncólogo",
            ),
            array(
                'nombre'=>"Hematólogo",
            ),
            array(
                'nombre'=>"Nutricionista",
            ),
            array(
                'nombre'=>"Especialista en Medicina Física y Rehabilitación",
            ),
            array(
                'nombre'=>"Radiólogo",
            ),
            array(
                'nombre'=>"Dentista",
            ),
            array(
                'nombre'=>"Alergista",
            ),
            array(
                'nombre'=>"Geriatra",
            ),
            array(
                'nombre'=>"Cirujano pediátrico",
            ),
            array(
        			'nombre'=>"Infectólogo",
        		),
        		array(
        			'nombre'=>"Anestesiólogo",
        		),
        		array(
        			'nombre'=>"Neonatólogo",
        		),
        		array(
        			'nombre'=>"Especialista en Medicina Intensiva",
        		),
        		array(
        			'nombre'=>"Especialista en Emergencias",
        		),
        		array(
        			'nombre'=>"Especialista en Administración de Salud",
        		),
        		array(
        			'nombre'=>"Patólogo",
        		),
        		array(
        			'nombre'=>"Patólogo clínico",
        		),
        		array(
        			'nombre'=>"Neurofisiólogo clínico",
        		),
        		array(
        			'nombre'=>"Médico familiar",
        		),
        		array(
        			'nombre'=>"Genetista",
        		),
        		array(
        			'nombre'=>"Cirujano vascular",
        		),
        		array(
        			'nombre'=>"Epidemiólogo",
        		),
        		array(
        			'nombre'=>"Médico del Deporte",
        		),
        		array(
        			'nombre'=>"Terapeuta complementario",
        		),
        		array(
        			'nombre'=>"Médico legal",
        		),
        		array(
        			'nombre'=>"Homeópata",
        		),
        		array(
        			'nombre'=>"Fisioterapeuta",
        		),
        		array(
        			'nombre'=>"Bioquímico",
        		),
        		array(
        			'nombre'=>"Especialista en Medicina Estética",
        		),
        		array(
        			'nombre'=>"Médico del Trabajo",
        		),
        		array(
        			'nombre'=>"Fonoaudiólogo",
        		),
        		array(
        			'nombre'=>"Especialista en Medicina Nuclear",
        		),
        		array(
        			'nombre'=>"Médico ocupacional",
        		),
        		array(
        			'nombre'=>"Especialista en Medicina Natura",
        		),
        		array(
        			'nombre'=>"Especialista en Salud Pública",
        		),
        		array(
        			'nombre'=>"Farmacólogo",
        		),
        		array(
        			'nombre'=>"Técnico en Laboratorio Clínico",
        		),
        		array(
        			'nombre'=>"Podólogo",
        		),
        		array(
        			'nombre'=>"Quiropráctico",
        		),
        		array(
        			'nombre'=>"Enfermero",
        		),
        		array(
        			'nombre'=>"Óptico",
        		)
            ]
            
        );
    }
   
}
