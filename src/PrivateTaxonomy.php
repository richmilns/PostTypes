<?php
namespace PostTypes;

use PostTypes\Taxonomy;

/**
 * PrivateTaxonomy you can use for things like Slider Locations which don't need public archives or menu links
 * but are used elsewhere manually in your theme or plugin code
 * @since 2.0.4
 */
class PrivateTaxonomy extends Taxonomy
{
    /**
     * Gets the default options for the PrivatePostType
     * @return array
     */
    public function defaultOptions()
    {
        return [
            'hierarchical' => true,
            'rewrite' => [
                'slug' => $this->slug,
            ],
            'show_admin_column' => true,
            'show_tagcloud' => false,
            'query_var' => false,
            'show_in_nav_menus' => false,
        ];
    }
}
