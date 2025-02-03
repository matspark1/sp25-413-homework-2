## Week 3

### Weekly Recap

This week we went over the process of creating custom themes

1. We learned how to set up a custom theme from scratch 
    - In order to do so you must create a folder and within that folder you must create three files
        - functions.php
        - index.php
        - style.php
2. Within the style.php you must write out the details about the theme.
    - This includes the Theme Name, Author, Descrpition, and Version.
3. Afterwards you can begin creating the html within the index.php page
4. Once you have laid out the index.php page you can add styling by creating a css file with the styles on it. 
5. To connect that css file you must use the functions.php file and type in:
```php
function load_css()
{
    wp_register_style('style', get_stylesheet_directory_uri() . '/css/styles.css');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_css');
```
This function allows the the css file to be attached to the theme and files within the theme that would use the css.


## Child Themes

1. The set up is mostly the same as setting up a regular theme.
2. Once you set everything up, you can connect the parent theme's css to the child theme by putting this function inside of the functions.php within the child theme:
```php
function my_child_theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/css/styles.css');
}
add_action('wp_enqueue_scripts', 'my_child_theme_enqueue_styles');
```


### Admin Password:

username: **admin**
password: **admin**