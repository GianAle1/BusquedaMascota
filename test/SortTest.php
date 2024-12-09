<?php
require_once __DIR__ . '/../src/Sorting.php';  // Ajusta la ruta según la ubicación del archivo

use PHPUnit\Framework\TestCase;

class SortTest extends TestCase {
    public function testSortEmptyArray() {
        $input = [];
        $output = sortArrayAsc($input);
        $this->assertEquals([], $output);
    }

    public function testSortOrderedArray() {
        $input = [1, 2, 3];
        $output = sortArrayAsc($input);
        $this->assertEquals([1, 2, 3], $output);
    }

    public function testSortUnorderedArray() {
        $input = [3, 1, 2];
        $output = sortArrayAsc($input);
        $this->assertEquals([1, 2, 3], $output);
    }
}
