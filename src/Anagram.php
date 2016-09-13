<?php

    class Anagram
    {

        function anagramCheck($input, $input_array)
        {


            $filter_user_word = str_split(strtolower($input));
            sort($filter_user_word);
            $matching_words = array();

            foreach($input_array as $word) {
                $filter_word = str_split(strtolower($word));
                sort($filter_word);
                if ($filter_user_word == $filter_word) {
                    array_push($matching_words, $word);
                } else {
                    return "This is not an anagram.";
                }
            }
            return $matching_words;
        }
    }

?>
