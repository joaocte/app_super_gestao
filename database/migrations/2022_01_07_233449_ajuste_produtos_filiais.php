<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteProdutosFiliais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('filiais', function(Blueprint $table)
        {
            $table->id();
            $table->string('filial',30);
            $table->timestamps();
        }
    );
    Schema::create('produto_filiais', function(Blueprint $table)
        {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->decimal('preco_venda',8,2);
            $table->bigInteger('estoque_minimo');
            $table->bigInteger('estoque_maximo');

            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');
        }
    );

    Schema::table('produtos', function(Blueprint $table)
        {
            $table->dropColumn('preco_venda');
            $table->dropColumn('estoque_minimo');
            $table->dropColumn('estoque_maximo');
        }
    );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function(Blueprint $table)
        {
            $table->decimal('preco_venda',8,2);
            $table->bigInteger('estoque_minimo');
            $table->bigInteger('estoque_maximo');
        });

        Schema::dropIfExists('produto_filiais');
        Schema::dropIfExists('filiais');


    }
}
