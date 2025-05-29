<?php

use App\Models\setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value') ->nullable();
            $table->string('type');
             $table->timestamps();
        });

        setting::create([
            'key'=> '_site_name',
            'label'=> 'Judul Situs',
            'value'=> 'Website Sederhana',
            'type'=> 'text',
        ]);
        setting::create([
            'key'=> '_location',
            'label'=> 'Alamat',
            'value'=> 'Menara USM Lantai 4 Ruang UKM Panahan',
            'type'=> 'text',
        ]);
        setting::create([
            'key'=> '_instagram',
            'label'=> 'Instagram',
            'value'=> 'https://www.instagram.com/gendewageni_usm/',
            'type'=> 'text',
        ]);
        setting::create([
            'key'=> '_whatsapp',
            'label'=> 'WhatsApp',
            'value'=> 'https://wa.me/+6283106717654',
            'type'=> 'text',
        ]);
        setting::create([
            'key'=> '_site_description',
            'label'=> 'Site Description',
            'value'=> 'Menjadi UKM Panahan yang unggul dan berprestasi di tingkat nasional, serta menjadi wadah pengembangan karakter dan sportivitas bagi mahasiswa Universitas Semarang.',
            'type'=> 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
