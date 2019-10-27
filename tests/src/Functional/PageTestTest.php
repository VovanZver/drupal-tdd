<?php

namespace Drupal\Tests\tdd_custom\Functional;

use Drupal\Tests\BrowserTestBase;

class PageTestTest extends BrowserTestBase
{
    /**
     * Modules to enable.
     *
     * @var array
     */
    protected static $modules = ['node', 'tdd_custom'];

    /**
     * {@inheritdoc}
     */
    public function setUp() {
        parent::setUp();
    }

    public function testListingPageExists() {
        $this->drupalGet('pages');

        $this->assertSession()->statusCodeEquals(200);
    }

    public function testOnlyPublishedArticlesAreShown() {

        $this->drupalCreateNode(['type' => 'article', 'status' => TRUE]);
        $this->drupalCreateNode(['type' => 'article', 'status' => FALSE]);

        $result = views_get_view_result('pages');
        $nids = array_column($result, 'nid');

        $this->assertEquals([1], $nids);
    }

    public function testResultsAreOrderedAlphabetically() {
        $this->drupalCreateNode(['type' => 'article', 'title' => 'Page A']);
        $this->drupalCreateNode(['type' => 'article', 'title' => 'Page D']);
        $this->drupalCreateNode(['type' => 'article', 'title' => 'Page C']);
        $this->drupalCreateNode(['type' => 'article', 'title' => 'Page B']);

        $nids = array_column(views_get_view_result('pages'), 'nid');

        $this->assertEquals([1, 4, 3, 2], $nids);
    }

}
