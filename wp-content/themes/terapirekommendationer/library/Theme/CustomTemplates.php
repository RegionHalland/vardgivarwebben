<?php

namespace Terapirekommendationer\Theme;

class CustomTemplates
{
    public function __construct()
    {
        add_action('after_setup_theme', array($this, 'addCampaignTemplate'));
    }

    public function addCampaignTemplate()
    {
        \RegionHalland\Helper\Template::add(
            __('Whole chapter', 'Terapirekommendationer'),
            \RegionHalland\Helper\Template::locateTemplate('whole-chapter.blade.php'),
            'all'
        );

        \RegionHalland\Helper\Template::add(
            __('All Headings', 'Terapirekommendationer'),
            \RegionHalland\Helper\Template::locateTemplate('all-headings.blade.php'),
            'all'
        );
    }

}
