<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCategoryPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_post', function (Blueprint $table) {
            $table->engine = 'InnoDB ROW_FORMAT=DYNAMIC';
            $table->increments('id')->comment('管理ID');
            $table->unsignedInteger('category_id')->comment('求人ID');
            $table->unsignedInteger('post_id')->comment('スキルID');
            $table->datetime('created_at')->comment('作成日時')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->datetime('updated_at')->comment('更新日時')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->datetime('deleted_at')->comment('削除日時')->nullable();
        });
        DB::statement("ALTER TABLE category_post COMMENT 'カテゴリと投稿の中間テーブル'");
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_post');
    }
}