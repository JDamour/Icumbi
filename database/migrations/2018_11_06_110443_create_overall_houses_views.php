<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOverallHousesViews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
      CREATE VIEW views_overall_houses AS
      (
        SELECT houses.id as houseId, districts.name AS districtName,
            sectors.name AS sectorName, houses.housePrice AS price,
            paymentfrequency.name AS paymentFrequency,
            houses.numberOfRooms AS rooms, uploads.source AS image

        FROM `houses`
            LEFT JOIN `districts` ON houses.district_id=districts.id
            LEFT JOIN `sectors` ON  houses.sector_id=sectors.id
            LEFT JOIN `paymentfrequency` ON houses.paymentfrequency_id=paymentfrequency.id
            LEFT JOIN `uploads` ON houses.id=uploads.house_id
      )
    ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS views_overall_housez');
    }
}
