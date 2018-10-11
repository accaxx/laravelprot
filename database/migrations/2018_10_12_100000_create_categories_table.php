<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->engine = 'InnoDB ROW_FORMAT=DYNAMIC';
            $table->increments('id')->comment('管理ID');
            $table->string('name', 255)->comment('名前');
            $table->datetime('created_at')->comment('作成日時')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->datetime('updated_at')->comment('更新日時')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->datetime('deleted_at')->comment('削除日時')->nullable();
        });
        DB::statement("ALTER TABLE categories COMMENT 'カテゴリ'");
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}