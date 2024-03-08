<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_buku')->constrained('books');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->enum('status', ['0', '1'])->nullable()->default('0');
            $table->integer('jumlah');
            $table->timestamps();
        });
        DB::unprepared('
        CREATE TRIGGER min_stock
        AFTER INSERT ON peminjaman
        FOR EACH ROW
        BEGIN
        IF NEW.status = "0" THEN
        UPDATE books SET stok = stok - NEW.jumlah WHERE id = NEW.id;
        END IF;
        END;
        ');


        DB::unprepared('
        CREATE TRIGGER max_stock
        AFTER UPDATE ON peminjaman
        FOR EACH ROW
        BEGIN
        IF NEW.status = "1" THEN
        UPDATE books SET stok = stok + NEW.jumlah WHERE id = NEW.id;
        END IF;
        END;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};