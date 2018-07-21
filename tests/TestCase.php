<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp()
    {
        parent::setUp();
        $this->readConstants();
    }

    /**
     * テスト用に定数ファイル読み込み
     */
    private function readConstants()
    {
        $file_list = glob('./bootstrap/constants/*.php');
        foreach ($file_list as $file) {
            if (is_file($file)) {
                require_once $file;
            }
        }
    }
}
