<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase {

        function test_CountOneWord() {

            // Arrange
            $test_score = 0;
            $expected_output = 1;
            $repeat_counter_test_one = new RepeatCounter;
            $test_word = "a";
            $test_string = "The apples come from a tree.";

            // Act
            $test_result = $repeat_counter_test_one->CountRepeats($test_word, $test_string);
            //$test_result = $scrabble_score_test_instance->calcScore();

            // Assert
            $this->assertEquals($expected_output, $test_result);


        }

        function test_CountTwoWords() {

            // Arrange
            $test_score = 0;
            $expected_output = 2;
            $repeat_counter_test_two = new RepeatCounter;
            $test_word = "Apple";
            $test_string = "The apple comes from an apple tree.";

            // Act
            $test_result = $repeat_counter_test_two->CountRepeats($test_word, $test_string);
            //$test_result = $scrabble_score_test_instance->calcScore();

            // Assert
            $this->assertEquals($expected_output, $test_result);


        }

    }

?>
