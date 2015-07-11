<?php

use Mockery as m;

/**
 * Class HtmlBuilderTest.
 */
class HtmlBuilderTest extends TestCase
{
    public function testDl()
    {
        $list = [
            'foo'  => 'bar',
            'bing' => 'baz',
        ];

        $attributes = ['class' => 'example'];

        $result = $this->html->dl($list, $attributes);

        $this->assertEquals('<dl class="example"><dt>foo</dt><dd>bar</dd><dt>bing</dt><dd>baz</dd></dl>', $result);
    }

    public function testMeta()
    {
        $result = $this->html->meta('description', 'Lorem ipsum dolor sit amet.');

        $this->assertEquals('<meta name="description" content="Lorem ipsum dolor sit amet.">'.PHP_EOL, $result);
    }

    public function testMetaOpenGraph()
    {
        $result = $this->html->meta(null, 'website', ['property' => 'og:type']);

        $this->assertEquals('<meta content="website" property="og:type">'.PHP_EOL, $result);
    }

    public function testFavicon()
    {
        $target = $this->url->to('http://foo.com/bar.ico');
        $result = $this->html->favicon('http://foo.com/bar.ico');

        $this->assertEquals('<link rel="shortcut icon" type="image/x-icon" href="'.$target.'">'.PHP_EOL, $result);
    }
}
