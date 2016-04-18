<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'leads', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            $table->unsignedInteger( 'list_model_id' );
            $table->foreign( 'list_model_id' )->references( 'id' )->on( 'lead_lists' ); //ConfigID

            /*
             * Name Fields
             */
            $table->enum( 'title', [
                'Mr.',
                'Mrs.',
                'Ms.',
                'Dr.'
            ] );
            $table->string( 'first_name' );
            $table->string( 'last_name' );
            $table->enum( 'suffix', [
                'Jr.',
                'Sr.',
                'I',
                'II',
                'III',
                'IV',
                'V',
                'MD',
                'DDS',
                'PhD',
                'DVM',
            ] );
            $table->string( 'email' );

            /*
             * Contact Fields
             */
            $table->string( 'home_phone' );
            $table->string( 'mobile_phone' );
            $table->dateTime( 'birth_date' );
            $table->enum( 'gender', [
                'Male',
                'Female'
            ] );
            $table->enum( 'maritalStatus', [
                'single',
                'married',
                'separated',
                'divorced'
            ] );

            /*
             * Occupation fields
             */
            $table->string( 'education' );
            $table->string( 'occupation' );
            $table->string( 'profession' );
            $table->unsignedInteger( 'income' );
            $table->string( 'income_currency_code' );

            /*
             * Address Fields
             */
            $table->string( 'address1' );
            $table->string( 'address2' );
            $table->string( 'address3' );
            $table->string( 'city' );
            $table->string( 'state' );
            $table->string( 'zip' );
            $table->string( 'country', 3 );

            $table->dateTime( 'capture_date' ); //Date user captured the lead
            $table->decimal( 'ip', 45 );

            $table->softDeletes();
            $table->timestamps();  //include the date we got the lead
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('leads');
    }
}
