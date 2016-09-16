<?php

    class RepeatCounter {

        public $word_count;

        function __construct() {
            $this->word_count = 0;
        }

        function CountRepeats($input_word, $input_string) {
            $word_test = strtolower($input_word);
            $string_test = explode(" ", $input_string);

            for ($i = 0; $i < count($string_test); $i++) {
                if ($word_test === strtolower($string_test[$i])) {
                    $this->word_count++;
                }
            }

            return $this->word_count;
        }

    }

?>
