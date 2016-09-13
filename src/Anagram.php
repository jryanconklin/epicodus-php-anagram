<?php

    class Anagram
    {

        function anagramCheck($input1, $input_array)
        {
            $input1 = str_split($input1);
            $input1 = sort($input1);
            $matching_words = array();

            foreach($input_array as $word) {
                $word = str_split($word);
                $word = sort($word);
                if ($input1 == $word) {
                    array_push($matching_words, $word);
                    return "Match!";
                } else {
                    return "This is not an anagram.";
                }
            }
        }
    }

?>
