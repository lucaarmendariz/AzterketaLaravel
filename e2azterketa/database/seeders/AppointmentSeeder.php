<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doctor;
use App\Models\Appointment;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $doctors = [
            ['izena' => 'Gabriel', 'espezialitatea' => 'Pancreas'],
            ['izena' => 'Virginia', 'espezialitatea' => 'Gibelak'],
        ];

        foreach ($doctors as $doctorData) {
            $doctor = Doctor::create($doctorData);

            Appointment::create([
                'paziente_izena' => 'Markel',
                'data' => '2026/02/05',
                'egoera' => 'Pending',
                'doctor_id' => $doctor->id
            ]);

            Appointment::create([
                'paziente_izena' => 'Maria',
                'data' => '2026/02/04',
                'egoera' => 'Completed',
                'doctor_id' => $doctor->id
            ]);
        }
    }
}
