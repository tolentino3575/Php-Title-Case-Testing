<?php
    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makeTitleCAse_oneWord()
        {
            //array_change_key_case
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf";

            //act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //asssert
            $this->assertEquals("Beowulf", $result);
        }

        function test_TitleCase_multipleWords()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the little mermaid";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("The Little Mermaid", $result);
        }
    }
 ?>
