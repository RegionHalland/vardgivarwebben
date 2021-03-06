<?php

namespace RegionHalland\Helper;

class Html
{
    /**
     * Get HTML Tags
     * @param string $content String to get HTML tags from
     * @param  boolean $closeTags Set to false to exclude closing tags
     * @return array       Htmltags
     */
    public static function getHtmlTags($content, $closeTags = true)
    {
        if ($closeTags == true) {
            $re = '@<[^>]*>@';
        } else {
            $re = '@<[^>/]*>@';
        }

        preg_match_all($re, $content, $matches, PREG_SET_ORDER, 0);

        if (isset($matches) && !empty($matches)) {
            $tags = array();
            foreach ($matches as $match) {
                $tags[] = $match[0];
            }

            $tags = array_unique($tags);

            return $tags;
        }

        return;
    }

    /**
     * Get HTML attributes from string
     * @param string $content String to get HTML attributes from
     * @return array       Attributes
     */
    public static function getHtmlAttributes($content)
    {
        $content = self::getHtmlTags($content, false);

        if (!is_array($content) || empty($content)) {
            return;
        }

        $content = implode($content);

        $re = '@(\s+)(\S+)=["\']?((?:.(?!["\']?\s+(?:\S+)=|[>]))+.)["\']?@';

        preg_match_all($re, $content, $matches, PREG_SET_ORDER, 0);

        $atts = array();
        if ($matches) {
            foreach ($matches as $match) {
                $atts[$match[2]] = $match[0];
            }

            return $atts;
        }

        return;
    }


    /**
     * Strip tags & attributes from String
     * @param string $content String to get HTML attributes from
     * @return array       Attributes
     */
    public static function stripTagsAndAtts($content, $allowedTags = '', $allowedAtts = '')
    {

        if (isset($allowedTags) && is_array($allowedTags)) {
            $content = strip_tags($content, implode($allowedTags));
        } else {
            $content = strip_tags($content);
        }

        //Strip attributes
        $atts = \RegionHalland\Helper\Html::getHtmlAttributes($content);

        if ($atts && !empty($atts)) {
            if (isset($allowedAtts) && is_array($allowedAtts)) {
                foreach ($allowedAtts as $attribute) {
                    unset($atts[$attribute]);
                }
            }

            foreach ($atts as $att) {
                $content = str_replace($att, "", $content);
            }
        }


        return $content;
    }
}
