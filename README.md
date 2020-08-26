# Twenty Twenty WordPress Child Theme

description coming soon...

## Why Twenty Twenty?

At our Agency, we occassionally work with the Twenty Twenty WordPress Theme for smaller WordPress projects. This theme is designed to take full advantage of the flexibility of the block editor while also providing the ability to easily customize the theme design - to some extent - with different layouts, accessible colors, and fonts.


## Setup

Make sure you have a WordPress environment with Twenty Twenty (the parent theme) installed. This child theme follows [WordPress Coding Standards](https://github.com/WordPress/WordPress-Coding-Standards) similar to its parent theme.

### 1. Create a New Child Theme

► Fork this repository and give it the name of the new theme.

### 2. Change Theme Information

- Open `style.css` and update the following:

```
Theme Name:   $new_theme_name
Theme URI:    $new_theme_website
Description:  $add_description_here_if_necessary_otherwise_remove
Author:       $change_author_if_you_desire
Author URI:   $change_author_website_if_you_desire
...
Text Domain:  $new_theme_name
```

- Open `functions.php` and in the coding editor of your choice, search for the phrase `my_theme` and replace it with the name of your theme. 

### 3. Remove unnecessary code

Go to `functions.php` and in the function 'remove_parent_functionality', you can remove functions from a specified action hook in the parent theme by using remove_action(). [Read more here](https://developer.wordpress.org/reference/functions/remove_action/)

### Last Recommendation

As recommend to avoid replacing templates or template-parts from the parent theme with custom templates as much as possible, as this will prevent the child theme to be able to use any updates that comes with the parent theme further on - unless you also customize the child theme each time.


## Copyright

Twenty Twenty Child Theme is derived from the Twenty Twenty WordPress Theme, Copyright 2019 WordPress.org. Twenty Twenty is distributed under the terms of the GNU GPL.

This child theme is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.


## Changelog  

### 1.0  

* Released: August 26, 2020  

Initial release 