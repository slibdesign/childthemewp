# childthemewp.com the world’s largest wordpress child theme library 🧸

[Demo](https://childthemewp.com/)

in 2019 i decided to build the largest wordpress child theme library in the world. my aim was and still is to make it easier for web developers and entrepreneurs around the world, to find and use wordpress child themes. appyling a [child theme](https://developer.wordpress.org/themes/advanced-topics/child-themes/) to a wordpress website future proofs 🚑 it and makes it easier to update!

## seven ⭐ popular child themes

created on childthemewp.com

* [Twenty Twenty Three](https://github.com/slibdesign/ChildThemeWP/tree/main/twentytwentythree-child)
* [Twenty Twenty Two](https://github.com/slibdesign/ChildThemeWP/tree/main/twentytwentytwo-child)
* [Twenty Twenty One](https://github.com/slibdesign/ChildThemeWP/tree/main/twentytwentyone-child)
* [Twenty Twenty](https://github.com/slibdesign/ChildThemeWP/tree/main/twentytwenty-child)
* [Twenty Nineteen](https://github.com/slibdesign/ChildThemeWP/tree/main/twentynineteen-child)
* [Twenty Seventeen](https://github.com/slibdesign/ChildThemeWP/tree/main/twentyseventeen-child)
* [Twenty Sixteen](https://github.com/slibdesign/ChildThemeWP/tree/main/twentysixteen-child)

there is also a 💎 [special generation tool](https://childthemewp.com/create-custom-child-theme/) to create any custom child theme

## 2 previews

_homepage_

![homepage](https://childthemewp.com/wp-content/uploads/homepage.png "homepage")

---
_twenty twenty child theme page_

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

`//blank file`

## web development

once a child theme is installed in the wordpress dashboard a developer can edit 🏀 the child theme with their code changes. the developer does this within the wordpress dashboard under appearances or by using their favourite code editor 🍿.

### project data

start date: april 2020

number of international visitors 🌏: 654,061

number of downloads 🚀: 642,447

made by 😎: ben [www.slibdesign.com](https://www.slibdesign.com)