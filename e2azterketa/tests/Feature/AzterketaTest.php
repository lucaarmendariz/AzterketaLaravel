<?php

use App\Models\Doctor;

test('show testa', function () {
    $doctor = Doctor::create(['izena' => 'Luca', 'espezialitatea'=> 'traumatologia']);

    $response = $this->get("/api/doctors/{$doctor->id}");

    $response->assertStatus(200);
});


test('store testa', function () {
    $response = $this->post("/api/doctors", ['izena' => 'Luca', 'espezialitatea'=> 'traumatologia']);

    $response->assertStatus(201);
});
//asd
