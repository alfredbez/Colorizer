<?php

    class ColorizeTest extends PHPUnit_Framework_TestCase {

        protected $colorize;

        public function setup() {
            $this->colorize = new Colorizer\Colorize();
        }

        /** @test */
        public function it_can_be_converted_to_rgb() {
            $this->assertEquals('rgb(165, 196, 254)', $this->colorize->toRGB('foo'));
        }

        /** @test */
        public function it_can_be_converted_to_hex() {
            $this->assertEquals('#a5c4fe', $this->colorize->toHex('foo'));
        }

        /** @test */
        public function it_can_be_normalized_via_the_constructor() {
            $normalized = new Colorizer\Colorize(64, 224);
            $this->assertEquals('rgb(64, 64, 224)', $normalized->toRGB('Taco bueno!'));
        }

        /** @test */
        public function it_can_be_normalized_via_a_method() {
            $normalized = $this->colorize->normalize(64, 224);
            $this->assertEquals('rgb(64, 64, 224)', $normalized->toRGB('Taco bueno!'));
        }

    }
