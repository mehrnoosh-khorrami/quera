<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class GamesTableSampleTest extends TestCase
{
    public function test_games_table_schema()
    {
        $expectedSchema = [
            [
                'Field' => 'id',
                'Type' => 'bigint(20) unsigned',
                'Null' => 'NO',
                'Key' => 'PRI',
                'Default' => '',
                'Extra' => 'auto_increment'
            ],
        ];

        $actualSchema = DB::select('DESCRIBE games');
        $actualSchema = array_map(function ($column) {
            return (array) $column;
        }, $actualSchema);

        $expectedSchema = $this->convertSchema($expectedSchema);
        $actualSchema = $this->convertSchema($actualSchema);
        
        $this->assertEquals($expectedSchema['id'], $actualSchema['id']);
    }

    private function convertSchema($schema)
    {
        $result = [];
        foreach ($schema as $column) {
            $columnName = $column['Field'];
            unset($column['Field']);
            if (str_starts_with($column['Type'], 'enum')) {
                $column['Type'] = str_replace(['enum(', ')'], '', $column['Type']);
                $column['Type'] = explode(',', $column['Type']);
                sort($column['Type']);
            }
            $result[$columnName] = $column;
        }

        return $result;
    }
}
