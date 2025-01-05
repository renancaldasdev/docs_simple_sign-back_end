<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->enum('document_type', ['cpf', 'cnpj']);
            $table->string('document_number', 255)->unique();
            $table->string('telephone', 255);
            $table->string('email', 255)->unique();
            $table->string('logo', 255)->nullable();
            $table->string('company_size', 255)->nullable();
            $table->string('reason_for_registration', 255);
            $table->string('number_of_documents_per_month', 255);
            $table->string('customer_signature', 255);
            $table->foreignId('state_id')->constrained('states')->cascadeOnDelete();
            $table->foreignId('city_id')->constrained('cities')->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
