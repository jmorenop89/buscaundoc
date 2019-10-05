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
                'slug'=>str_slug('Ginecólogo')
            ),
            array(
                'nombre'=>"Traumatólogo y Ortopedista",
                'slug'=>str_slug('Traumatólogo y Ortopedista')
            ),
            array(
                'nombre'=>"Dermatólogo",
                'slug'=>str_slug('Dermatólogo')
            ),
            array(
                'nombre'=>"Pediatra",
                'slug'=>str_slug('Pediatra')
            ),
            array(
                'nombre'=>"Cirujano general",
                'slug'=>str_slug('Cirujano general')
            ),
            array(
                'nombre'=>"Gastroenterólogo",
                'slug'=>str_slug('Gastroenterólogo')
            ),
            array(
                'nombre'=>"Urólogo",
                'slug'=>str_slug('Urólogo')
            ),
            array(
                'nombre'=>"Oftalmólogo",
                'slug'=>str_slug('Oftalmólogo')
            ),
            array(
                'nombre'=>"Neurólogo",
                'slug'=>str_slug('Neurólogo')
            ),
            array(
                'nombre'=>"Otorrino",
                'slug'=>str_slug('Otorrino')
            ),
            array(
                'nombre'=>"Psiquiatra",
                'slug'=>str_slug('Psiquiatra')
            ),
            array(
                'nombre'=>"Endocrinólogo",
                'slug'=>str_slug('Endocrinólogo')
            ),
            array(
                'nombre'=>"Neumólogo",
                'slug'=>str_slug('Neumólogo')
            ),
            array(
                'nombre'=>"Cardiólogo",
                'slug'=>str_slug('Cardiólogo')
            ),
            array(
                'nombre'=>"Neurocirujano",
                'slug'=>str_slug('Neurocirujano')
            ),
            array(
                'nombre'=>"Internista",
                'slug'=>str_slug('Internista')
            ),
            array(
                'nombre'=>"Psicólogo",
                'slug'=>str_slug('Psicólogo')
            ),
            array(
                'nombre'=>"Reumatólogo",
                'slug'=>str_slug('Reumatólogo')
            ),
            array(
                'nombre'=>"Médico general",
                'slug'=>str_slug('Médico general')
            ),
            array(
                'nombre'=>"Cirujano plástico",
                'slug'=>str_slug('Cirujano plástico')
            ),
            array(
                'nombre'=>"Nefrólogo",
                'slug'=>str_slug('Nefrólogo')
            ),
            array(
                'nombre'=>"Cirujano cardiovascular y torácico",
                'slug'=>str_slug('Cirujano cardiovascular y torácico')
            ),
            array(
                'nombre'=>"Cirujano maxilofacial",
                'slug'=>str_slug('Cirujano maxilofacial')
            ),
            array(
                'nombre'=>"Oncólogo",
                'slug'=>str_slug('Oncólogo')
            ),
            array(
                'nombre'=>"Hematólogo",
                'slug'=>str_slug('Hematólogo')
            ),
            array(
                'nombre'=>"Nutricionista",
                'slug'=>str_slug('Nutricionista')
            ),
            array(
                'nombre'=>"Especialista en Medicina Física y Rehabilitación",
                'slug'=>str_slug('Especialista en Medicina Física y Rehabilitación')
            ),
            array(
                'nombre'=>"Radiólogo",
                'slug'=>str_slug('Radiólogo')
            ),
            array(
                'nombre'=>"Dentista",
                'slug'=>str_slug('Dentista')
            ),
            array(
                'nombre'=>"Alergista",
                'slug'=>str_slug('Alergista')
            ),
            array(
                'nombre'=>"Geriatra",
                'slug'=>str_slug('Geriatra')
            ),
            array(
                'nombre'=>"Cirujano pediátrico",
                'slug'=>str_slug('Cirujano pediátrico')
            ),
            array(
                    'nombre'=>"Infectólogo",
                    'slug'=>str_slug('Infectólogo')
    		),
    		array(
                'nombre'=>"Anestesiólogo",
                'slug'=>str_slug('Anestesiólogo')
    		),
    		array(
                'nombre'=>"Neonatólogo",
                'slug'=>str_slug('Neonatólogo')
    		),
    		array(
                'nombre'=>"Especialista en Medicina Intensiva",
                'slug'=>str_slug('Especialista en Medicina Intensiva')
    		),
    		array(
                'nombre'=>"Especialista en Emergencias",
                'slug'=>str_slug('Especialista en Emergencias')
    		),
    		array(
                'nombre'=>"Especialista en Administración de Salud",
                'slug'=>str_slug('Especialista en Administración de Salud')
    		),
    		array(
                'nombre'=>"Patólogo",
                'slug'=>str_slug('Patólogo')
    		),
    		array(
                'nombre'=>"Patólogo clínico",
                'slug'=>str_slug('Patólogo clínico')
    		),
    		array(
                'nombre'=>"Neurofisiólogo clínico",
                'slug'=>str_slug('Neurofisiólogo clínico')
    		),
    		array(
                'nombre'=>"Médico familiar",
                'slug'=>str_slug('Médico familiar')
    		),
    		array(
                'nombre'=>"Genetista",
                'slug'=>str_slug('Genetista')
    		),
    		array(
                'nombre'=>"Cirujano vascular",
                'slug'=>str_slug('Cirujano vascular')
    		),
    		array(
                'nombre'=>"Epidemiólogo",
                'slug'=>str_slug('Epidemiólogo')
    		),
    		array(
                'nombre'=>"Médico del Deporte",
                'slug'=>str_slug('Médico del Deporte')
    		),
    		array(
                'nombre'=>"Terapeuta complementario",
                'slug'=>str_slug('Terapeuta complementario')
    		),
    		array(
                'nombre'=>"Médico legal",
                'slug'=>str_slug('Médico legal')
    		),
    		array(
                'nombre'=>"Homeópata",
                'slug'=>str_slug('Homeópata')
    		),
    		array(
                'nombre'=>"Fisioterapeuta",
                'slug'=>str_slug('Fisioterapeuta')
    		),
    		array(
                'nombre'=>"Bioquímico",
                'slug'=>str_slug('Bioquímico')
    		),
    		array(
                'nombre'=>"Especialista en Medicina Estética",
                'slug'=>str_slug('Especialista en Medicina Estética')
    		),
    		array(
                'nombre'=>"Médico del Trabajo",
                'slug'=>str_slug('Médico del Trabajo')
    		),
    		array(
                'nombre'=>"Fonoaudiólogo",
                'slug'=>str_slug('Fonoaudiólogo')
    		),
    		array(
                'nombre'=>"Especialista en Medicina Nuclear",
                'slug'=>str_slug('Especialista en Medicina Nuclear')
    		),
    		array(
                'nombre'=>"Médico ocupacional",
                'slug'=>str_slug('Médico ocupacional')
    		),
    		array(
                'nombre'=>"Especialista en Medicina Natural",
                'slug'=>str_slug('Especialista en Medicina Natural')
    		),
    		array(
                'nombre'=>"Especialista en Salud Pública",
                'slug'=>str_slug('Especialista en Salud Pública')
    		),
    		array(
                'nombre'=>"Farmacólogo",
                'slug'=>str_slug('Farmacólogo')
    		),
    		array(
                'nombre'=>"Técnico en Laboratorio Clínico",
                'slug'=>str_slug('Técnico en Laboratorio Clínico')
    		),
    		array(
                'nombre'=>"Podólogo",
                'slug'=>str_slug('Podólogo')
    		),
    		array(
                'nombre'=>"Quiropráctico",
                'slug'=>str_slug('Quiropráctico')
    		),
    		array(
                'nombre'=>"Enfermero",
                'slug'=>str_slug('Enfermero')
    		),
    		array(
                'nombre'=>"Óptico",
                'slug'=>str_slug('Óptico')
    		)
            ]
            
        );
    }
   
}
