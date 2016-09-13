<?php
    require_once "src/Anagram.php";
    class Anagramtest extends PHPUnit_Framework_TestCase
    {
        function test_anagramCheck_two_words()
        {
            $wordCheck = new Anagram;
            $input = "beard";
            $input_array = array("bread");
            $output = $wordCheck->anagramCheck($input, $input_array);
            $this->assertEquals(array("bread"), $output);
        }

        function test_anagramCheck_multiple_words()
        {
            $wordCheck = new Anagram;
            $input = "beard";
            $input_array = array("bread", "beard");
            $output = $wordCheck->anagramCheck($input, $input_array);
            $this->assertEquals(array("bread", "beard"), $output);
        }

    }
?>
