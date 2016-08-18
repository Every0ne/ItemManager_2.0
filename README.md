#ItemManager 2

ItemManager (IM) is a simple flat-file framework for GetSimple-CMS that allows you to develop completely customisable
PHP applications bundled with GetSimple-CMS.

ItemManager offers you a XML data management in just as straightforward a manner as if you were working with a real
database. ItemManager’s powerful API is very easy and enjoyable.

Design any type of product lists (items), search and filter through the items lists by using flexible API functions.
You can create a random set of categories and fields, each category is assigned any number of fields and each item is
assigned to one category, that represent the underlying data structure of ItemManager, which allows a countless design
combinations.

Hey Developer, if you are going to create a new GetSimple plugin, no matter whether kind of processing logic complexity:
a blog, shopping cart, user management or just a simple script, be sure that ItemManager helps you
with the realization of your ideas! Stop wasting your effort re-inventing the wheel, ItemManager takes care of the
basic data management, getter, setter methods and any XML data storage processes for your plugin properties, while you
may continue to focus on more important things. So should you want to save your data in order to be able to use it again
later on, just do:

```php
$item = new Item(1);
$item->name = 'My item name';
$item->fields->data->value = 'Hello world';
$item->save();
```

In order to bring the data into display again do:

```php
$item = imanager()->getItem(1, 'name=My item name');
echo $item->fields->data->value; // Outputs: Hello world
```
Is it really so complicated?


**What can be achieved with ItemManager?**

The use of ItemManager allows a very variable field of application, ItemManager can be used to create tools and
plugins:

- Product -lists, -catalogs
- eCommerce plugins
- Image galleries
- Blogs
- User management tools
- Varios data storage
- Basic data structures for applications and plugins
- Settings and data storages for other plugins
- Depiction of complex Informations in Tables
- Masks, search functions
- Substitutions for small databases
- etc

##Installation Instructions:

**Installing ItemManager 2.* from the ZIP file:**
You can download the current version of the ItemManager on GitHub. Unzip the downloaded file and copy its
contents to your plugins folder. The required data directories and configurations should be created automatically
when you first access the plugin. Make sure that PHP-process has enough security permissions to access these files.

**Upgrading ItemManager 2.* from the ZIP file:**  
ItemManager upgrades are easy because everything important to your site is contained under the `/data/imanager/` and
`/data/uploads/imanager/` directory. You should delete everything else in `/plugins/` directory that belongs to the
ItemManager and leave the both directories above as it is.

**Upgrading ItemManager 2.* to 2.3.4:**  
Download the latest version of ItemManager GitHub  
Extract the ZIP file somewhere temporary.  
Delete the following file from your `/plugins/` directory:  

Delete: `/plugins/imanager` folder  
Delete: `/plugins/imanager.php` file  
Upload the new version imanager folder to `/plugins/` directory  
Upload the new version `imanager.php` to `/plugins/` directory  

> NOTE: Backup any files you replace or delete!

##Usage:

Here’s a simple ItemManager call, that you can use anywhere in your template files or in your own plugins to get a
current ItemManager class instance:

```php
$imanager = imanager();
```

The most quickest way to get a specific item is by using the item ID and category ID, there is an example: 

```php
$item = $imanager->getItem(1, 2)
```
where the first parameter is the category ID and the second an item ID.

To get a specific item via the field name you could do: 
```php
$item = $imanager->getItem('slug=category-slug', 'fieldname=item_field_name');
```

More infos about ItemManager's items: [Working with Items](http://ehret-studio.com/lab/2015/mai/itemmanager-2.0-api-reference-items/)


Access a category:
```php
$category = $imanager->getCategory(1);
```

If you want to find one category on a specific attributes like id, name, slug, position, created, updated, do following
```php
// via the category slug
$category = $imanager->getCategory('slug=my-category-slug');
// category name 
$category = $imanager->getCategory('name=My Category Name');
// position
$category = $imanager->getCategory('position=2');
// ...
```

More infos about ItemManager's categories: [Working with Categories](http://ehret-studio.com/lab/2015/mai/itemmanager-2.0-api-reference-categories/)


For more information how to use ItemManager see also: http://ehret-studio.com/lab/2015/mai/itemmanager-2.0


##ItemManager extensions and plugins:
- [IM Extra Fields Plugin](https://github.com/bigin/ImExtraFields)
- [IM Photogallery](http://get-simple.info/extend/theme/itemmanagers-photogallery/1043/)
([Gallery example](http://ehret-studio.com/gallery/))
- [IM Simple Forun theme](http://get-simple.info/extend/theme/simpleforum/1016/)
([Example](http://im.ehret-studio.com/forum/))
- [Frontainer User Management plugin](http://get-simple.info/extend/plugin/frontainer/1015/)
([Sign up / Login / Logout / Password recovery](http://im.ehret-studio.com/login/))

##Changelog:

**2.3.4** 

Offers new features, that simplify the usage the plugin in combination with GetSimple native pages

See IM Extra Fields plugin: [https://github.com/bigin/ImExtraFields](https://github.com/bigin/ImExtraFields)

**2.3.3**

Slightly API modifications have been made in order to ease the use even for non-programming developers.  
More infos: `http://get-simple.info/forums/showthread.php?tid=7293`

**2.3.0**

BUGFIX: Small cache bug fixed
NEW: Expire cache method, can be used to automatically hooked to every `$item->save()` call  
NEW: Simple method to count the number of items, can be used to limiting files on the disk  

**2.2.0**  

BUGFIX: Category order in admin  
NEW: MarkupSectionCache  
NEW: Category Joins  

**2.1.0**

BUGFIX: upload file order  
BUGFIX: category listing markup  
NEW: Field title for uploaded images  
NEW: Field money  
NEW: Field datepicker  
