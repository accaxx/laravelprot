<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->engine = 'InnoDB ROW_FORMAT=DYNAMIC';
            $table->increments('id')->comment('管理ID');
            $table->string('title', 255)->comment('タイトル');
            $table->text('body')->comment('内容')->nullable();
            $table->unsignedInteger('show_flag')->comment('表示可否');
            $table->datetime('created_at')->comment('作成日時')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->datetime('updated_at')->comment('更新日時')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->datetime('deleted_at')->comment('削除日時')->nullable();
        });
        DB::statement("ALTER TABLE posts COMMENT '投稿'");
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}