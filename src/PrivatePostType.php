<?php
namespace PostTypes;

use PostTypes\PostType;

/**
 * PrivatePostType you can use for things like Sliders which don't need public archives or single templates
 * but are used elsewhere manually in your theme or plugin code
 * @since 2.0.4
 */
class PrivatePostType extends PostType
{
    /**
     * Gets the default options for the PrivatePostType
     * @return array
     */
    public function defaultOptions()
    {
        return [
            'public' => true,
            'rewrite' => [
                'slug' => $this->slug
            ],
            'has_archive' => false,
            'exclude_from_search' => true,
            'publicly_queryable' => false,
            'show_in_nav_menus' => false,
            'can_export' => true,
            'query_var' => false,
        ];
    }
}
