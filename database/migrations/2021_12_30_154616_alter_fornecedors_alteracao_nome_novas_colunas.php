<?php

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedorsAlteracaoNomeNovasColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fornecedors', function(Blueprint $table){
            $table->rename('fornecedores');
            $table->string('uf',2);
            $table->string('email',150);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fornecedores', function(Blueprint $table){
            $table->rename('fornecedors');
            $table->dropColumn('uf');
            $table->dropColumn('email');
            //$table->dropColumn(['uf', 'email']);

        });
    }
}
