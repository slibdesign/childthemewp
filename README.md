# childthemewp.com the world’s largest wordpress child theme library 🧸

[Demo](https://childthemewp.com/)

in 2019 i decided to build the largest wordpress child theme library in the world. my aim was and still is to make it easier for web developers and entrepreneurs around the world, to find and use wordpress child themes. there are lots of benefits of using a [child theme](https://developer.wordpress.org/themes/advanced-topics/child-themes/), but generally speaking using one is best to future proof 🚑 your website!

## seven ⭐ popular child themes created on childthemewp.com

* [Twenty Twenty Three](https://github.com/slibdesign/ChildThemeWP/tree/main/twentytwentythree-child)
* [Twenty Twenty Two](https://github.com/slibdesign/ChildThemeWP/tree/main/twentytwentytwo-child)
* [Twenty Twenty One](https://github.com/slibdesign/ChildThemeWP/tree/main/twentytwentyone-child)
* [Twenty Twenty](https://github.com/slibdesign/ChildThemeWP/tree/main/twentytwenty-child)
* [Twenty Nineteen](https://github.com/slibdesign/ChildThemeWP/tree/main/twentynineteen-child)
* [Twenty Seventeen](https://github.com/slibdesign/ChildThemeWP/tree/main/twentyseventeen-child)
* [Twenty Sixteen](https://github.com/slibdesign/ChildThemeWP/tree/main/twentysixteen-child)

## 2 previews

![homepage](https://childthemewp.com/wp-content/uploads/homepage.png "homepage")

![twenty twenty wordpress child theme web page](https://childthemewp.com/wp-content/uploads/twentytwenty-child.png "twenty twenty child theme")

## child theme code example

contains 4 components

**style.css**

`/*
theme name: twenty twenty one child
author: childthemewp.com
author uri: https://childthemewp.com/twenty-twenty-one/
description: twenty twenty one wordpress child theme.
template: twentytwentyone
text domain: twentytwentyone-child
*/`

**functions.php**
`<?php
add_action( 'wp_enqueue_scripts', 'enqueue_twentytwentyone_child' );
function enqueue_twentytwentyone_child()
{
      wp_enqueue_style('twentytwentyone-css', './twentytwentyone/style.css' );
      wp_enqueue_style('twentytwentyone-child-css', './twentytwentyone-child/style.css');
      wp_enqueue_script('twentytwentyone-child-js', './twentytwentyone-child/js/script.js', array( 'jquery' ), '1.0', true );
}
?>`

**screenshot.png**
`<img src="./screenshot.png" alt="twentytwentyone child theme screenshot">`

**script.js**
`//blank`

## web development

once installed in the wordpress dashboard a developer can edit the child theme with their code changes.

### project information

project start: april 2020

number of child themes created:👨‍🚀 +8,456 (as of november 2022)

made by ben 🌏 [slibdesign.com](https://www.slibdesign.com)