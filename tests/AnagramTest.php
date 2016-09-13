<?php
    require_once "src/Anagram.php";
    class Anagramtest extends PHPUnit_Framework_TestCase
    {
        function test_anagramCheck_two_words()
        {
            $wordCheck = new Anagram;
            $input1 = "toenail";
            $input_array = array("otarine");
            $output = $wordCheck->anagramCheck($input1, $input_array);
            $this->assertEquals("Match!", $output);
        }

        function test_anagramCheck_multiple_words()
        {
            $wordCheck = new Anagram;
            $input1 = "toenail";
            $input_array = array("otarine", "etaerio", "aneroid", "elation");
            $output = $wordCheck->anagramCheck($input1, $input_array);
            $this->assertEquals("Match!", $output);
        }

    }
?>
