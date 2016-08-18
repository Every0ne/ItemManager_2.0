<?php
$i18n = array(
  'delete' => 'Delete field'
  //, 'option-value' => 'Choose category...'
  //, 'undo_failure' => '<div >The custom fields could not be restored.</div>'
  //, 'undo_success' => '<div >The custom fields have been successfully restored.</div>'
  , 'undo' => 'Undo'

  //, 'no_fields_created' => '<div >No custom fields created for this category.</div>'
  , 'relad_page' => 'Reload...'
  , 'FILTER' => 'Filter'
  , 'no_items' => '<div >No items available for this category</div>'
  , 'no_fields_yet' => '<div >The custom fields panel is not available yet.</div>'

  , 'add_category' => 'Manage categories'//1.0

  , 'add_new_category' => 'Add new category'
  , 'add_category_submit' => 'Add category'

	// 2.0
	, 'select_category_label' => 'Choose category'
	, 'no_category_created' => '<div >Before you can create your items, first create a category to which those items belong.</div>'
	, 'elements' => 'Items'
	, 'element' => 'Item'
	, 'no_items_yet' => 'No items available'
	, 'invalid_category' => 'You have entered illegal category'
	, 'category_name' => 'Name'
	, 'category_slug' => 'Slug'
	, 'category_id' => 'ID'
	, 'category_position' => 'Position'
	, 'category_created' => 'Created date'
	, 'category_updated' => 'Updated date'
	, 'fields_description' => 'This tab provides a number of options that you can use to customize your item structure.'
	, 'fields_title' => 'Manage fields'
	, 'fields_usage_description' => 'Below you can configure the custom fields. The ItemManager comes with a handful of field types baked in, and i’ve made it extremely easy for developers to add new ones.'
	, 'save_success' => '<div >The custom fields have been successfully saved.</div>'
	, 'fields_name' => 'Name'
	, 'fields_label' => 'Label'
	, 'fields_type' => 'Type'
	, 'fields_default' => 'Default value'
	, 'fields_create' => 'Create new field'
	, 'fields_add' => 'Save Custom Fields'
	, 'fields_sender' => 'Confirm'
	, 'text_field_value' => 'Text field'
	, 'longtext_field_value' => 'Long text field'
	, 'dropdown_field_value' => 'Dropdown box'
	, 'checkbox_field_value' => 'Check box'
	, 'password_field_value' => 'Password'
	, 'slug_field_value' => 'Slug'
	, 'chunk_field_value' => 'Chunk field'
	, 'editor_field_value' => 'WYSIWYG editor'
	, 'hidden_field_value' => 'Hidden field'
	, 'file_field_value' => 'Image upload field'
	, 'datafile_field_value' => 'File upload field'
	, 'save_failure' => '<div >The custom fields could not be saved.</div>'
	, 'customfields_add' => 'Confirm'

  //, 'edit_item' => 'Edit [[itemmanager-title]]'
  //, 'create_item' => 'Create new [[itemmanager-title]]'
  , 'title' => 'Title'
  , 'category' => 'Category'
  , 'category_exchange' => 'Change category'
  , 'details_page' => 'Select details page'
  , 'savebutton' => 'Save'
  , 'fill_me' => 'Fill me …'
  , 'cancel' => 'Cancel'
  , 'items-settings' => 'Manager settings'
  , 'choose_manager_title' => 'Choose Manager title'
  , 'filter_by_category' => 'Filter by category'
  , 'sorted_by_customfield' => 'Items sorted by customfield'
  , 'frontend_settings' => 'Frontend settings'
  , 'backend_settings' => 'Backend settings'
  , 'items_per_page' => 'Items per page'
  , 'max_thumb_size' => 'Max Thumbnail size (px)'
  , 'submit_settings' => 'Submit Settings'
  , 'settings' => 'Settings'
	, 'item-menu-titel' => 'Create / Edit Item'
	//2.0
	, 'err_magic_quotes_gpc' => '<div >Error: <strong>magic_quotes_gpc</strong> option<br />Description: magic_quotes_gpc is set to "1" in php.ini. This should be turned off, as it can cause issues with field values. More specifically, unserializing data stored in fileds.</div>'
	, 'custom_fields'  => 'Fields'
	, 'confirm_delete_category' => 'Are you sure you want to delete this category and all the items assigned to them?'
	, 'manage_category' => 'Categories'
	, 'add_new' => 'Add New'
	, 'view_all' => 'View All'
	, 'items_path_exists' => '<h3 class="floated">Item Manager</h3><p>The directory "<em>[[gsdatapath]]imanager</em>" does not exist. It is required for this plugin to function properly. Please create it manually and make sure that it is writable.</p>'
	, 'upload_path_exists' => '<h3 class="floated">Item Manager</h3><p>The directory "<em>[[end_path]]</em>" does not exist. It is required for this plugin to function properly. Please create it manually and make sure that it is writable.</p><p>You will also need to create a .htaccess document and place it in the "[[end_path]]" folder. The .htaccess file needs to contain the following line of code:<br/>Allow from all</p>'
  , 'other_path_exists' => '<h3 class="floated">[[itemmanager-title]] Manager</h3><p>The file "<em>[[gsdatapath]]items</em>" does not exist. It is required for this plugin to function properly. Please create it manually and make sure that it is writable.</p>'
  , 'directory_succesfull_created' => '<div >The below directory has been succesfully created:<br/>"<strong>[[end_path]]</strong>"</div>'
  , 'file_succesfull_created' => '<div >The below file has been succesfully created: "<strong>[[end_path]]</strong>"</div>'
  , 'err_copy_fail' => '<div >Copy [[old_file]] has failed...</div>'
  , 'err_file_exists' => '<div >A file with the entered "[[std_name]]" name already exists.</div>'
  , 'err_file_removed' => '<div >The "<strong>[[old_file]]</strong>" file has been removed.</div>'
  , 'err_unable_to_write' => '<div >Unable write data to the "[[data_file]]" file.</div>'
  , 'err_file_extension' => '<div>Unknown file extensions.</div>'
  , 'succesfull_saved' => '<div>The "<strong>[[data_file]]</strong>" has been succesfully saved.</div>'
  , 'succesfull_fields_updated' => '<div >The list of [[count]] items have been updated.</div>'
  , 'no_fields_updated' => '<div>No Items with the specified name can be found.</div>'
  , 'err_catname_duplication' => '<div >The category name you enter already exists.</div>'
  , 'err_name_reserved' => '<div>The field name "<strong>[[field]]</strong>" is reserved.</div>'
  , 'action_hidde' => 'hidden'
  , 'action_unhidde' => 'unhidden'
  , 'succesfull_hidde' => '<div>The "[[data_file]]" has been succesfully [[action]].</div>'
  , 'action_promoted' => 'promoted'
  , 'action_unpromoted' => 'unpromoted'
  , 'err_unable_to_delete' => '<div>Unable to delete the "[[item_file]]".</div>'
	// 1.0
	, 'successfull_settings_saved' => '<div>ItemManager settings successfully saved.</div>'
	, 'label_save_settings' => 'Save'
	,'edit_category' =>  'Edit Category'
	,'edit_category_info' =>  'Each item in ItemManger is filed under one Category. This improved navigation and allows items to be grouped with others of similar content. In creating Categories, recognize that each Category Name must be unique.'
	, 'general_settings' => 'General Settings'
	, 'date_time_format' => 'Date and time format'
	, 'admin_settings' => 'Admin Settings'
	, 'cat_max_length' => 'Maximum length for category names'
	, 'item_max_length' => 'Maximum length for item names'
	, 'field_max_length' => 'Maximum length for field names'
	, 'category_deleted' => '<div >The "[[category]]" category and all associated items and fields, has been deleted.</div>'
	, 'err_deleting_category' => '<div >Error deleting category: [[errormsg]]</div>'
	, 'err_updating_category' => '<div >Error updating category: [[errormsg]]</div>'
	, 'err_category_not_exists' => ' This category no longer exist'
	, 'err_category_file_writable' => '  The category file is not writable'
	, 'err_category_name_length' => '<div >Error saving category: The category names are limited to a maximum of [[count]] characters.</div>'
	, 'err_category_name_exists' => '<div >Error saving category: The category name already exists. </div>'
	, 'successfull_category_created' => '<div >The "<strong>[[category]]</strong>" category has been successfully created.</div>'
	, 'successfull_category_updated' => '<div >The "<strong>[[category]]</strong>" category has been successfully updated.</div>'
	, 'catlinkinfo' => 'Edit the category'
	, 'err_category_id_unknown' => '<div >The category you entered is not known.</div>'
	, 'err_category_position' => '<div >Only digits are allowed for category position specifications.</div>'
	, 'err_save_fields_unique' => '<div >The field names must be unique. The duplicates have been removed.</div>'
	, 'err_save_fields_maxlength' => '<div >Error saving fields: The field names are limited to a maximum of [[count]] characters.</div>'
	, 'err_upload_fields_usage' => '<div >The image upload field can only be used once per item.</div>'
	, 'create_cat_backups' => 'Automatic category backup'
	, 'create_field_backups' => 'Automatic fields backup before changing'
	, 'cat_backups_dir' => 'Backup directory for categories'
	, 'field_backups_dir' => 'Backup directory for fields'
	, 'err_backup' => '<div >Error creating a backup file (Check if the backup directory exists: [[backup]])</div>'
	, 'err_updated_by_process' => '<div >Error saving item: The item has been updated by another process</div>'
	, 'cat_per_page' => 'Categories per page'
	, 'cat_per_page_description' => '<i class="fa fa-info-circle"></i> You can change the number of categories per page by selecting another value.'
	, 'display_cat_filter' => 'Display Category filter'
	, 'display_cat_filter_info' => '<i class="fa fa-info-circle"></i> Checking this checkbox will show a filter panel under the Categories menu.'
	, 'default_cat_order' => 'Default sort order for categories'
	, 'ascending' => 'ascending'
	, 'descending' => 'descending'
	, 'default_cat_orderby' => 'Categories sort by attribut'
	, 'cat_orderby_description' => '<i class="fa fa-info-circle"></i> Here, you see the selection list in which you can choose the attribut you want to sort by.'
	, 'position' => 'Position'
	, 'date_created' => 'Created date'
	, 'date_updated' => 'Updated date'
	, 'categories_per_page' => 'Categories per page'
	, 'default_item_orderby' => 'Items sort by attribut'
	, 'item_orderby_description' => '<i class="fa fa-info-circle"></i> Here, you see the selection list in which you can choose the attribut you want to sort by.'
	, 'default_item_order' => 'Default sort order for items'
	, 'item_name' => 'Item name'
	, 'display_item_filter' => 'Display Item filter'
	, 'display_item_filter_info' => '<i class="fa fa-info-circle"></i> Checking this checkbox will show a filter panel under the Items menu.'
	, 'items_per_page' => 'Items per page'
	, 'items_per_page_description' => '<i class="fa fa-info-circle"></i> You can change the number of items per page by selecting another value.'
	, 'admin_settings' => 'Admin Settings'
	, 'category_filter_title' => 'Category filter'
	, 'category_settings_section' => 'Categories settings'
	, 'item_settings_section' => 'Items settings'
	, 'item' => 'Item'
	, 'confirm_delete' => 'Are you sure you want to delete item?'
	, 'default_display_fields' => 'Item fields to display'
	, 'default_display_fields_info' => '<i class="fa fa-info-circle"></i> You can choose which item fields to display in the Item list view'
	, 'position_table' => 'Pos'
	, 'name_table' => 'Name'
	, 'items_table' => 'Items'
	, 'category_table' => 'Category'
	, 'created_table' => 'Created'
	, 'updated_table' => 'Updated'
	, 'active_table' => 'Active'
	, 'items_header' => 'Manage items'
	, 'items' => 'items'
	, 'item' => 'item'
	, 'activate_deactivate' => 'activate/deactivate'
	, 'item_filter_title' => 'Item filter'
	, 'item_active' => 'Activation status'
	, 'item_label' => 'Label'
	, 'password_confirm_field' => 'Confirm password'
	, 'password_field' => 'New password'
	, 'err_timestamp' => '<div >Error: Timestamp invalid</div>'
	, 'err_save_item_timestamp_id' => '<div >Error saving item: Empty timestamp and item id.</div>'
	, 'err_by_empty_field' => '<div >The "<strong>[[field]]</strong>" is a required field.</div>'
	, 'err_item_exists' => '<div >Item with entered "[[name]]" name already exists.</div>'
	, 'err_save_item' => '<div >Error saving item</div>'
	, 'err_item_name_length' => '<div >Error saving item: The item names are limited to a maximum of [[count]] characters.</div>'
	, 'item_successfully_saved' => '<div >The "<strong>[[name]]</strong>" item have been successfully saved.</div>'
	, 'err_rename_directory' => 'Error occurred while renaming temporary directory "<strong>[[name]]</strong>". Please rename it manually and make sure that direcrory is writable.'
	, 'tmp_itage_min_time' => 'Retention period for temporary image containers'
	, 'tmp_itage_min_time_info' => '<i class="fa fa-info-circle"></i> Here, you can define the minimum number of days to keep temp image data in the system directory. Put 0 to never delete temporary image containers automatically.'
	, 'imageupload_settings_section' => 'Image upload settings'
	, 'create_item_backups' => 'Auto backup item before deletion'
	, 'item_backups_dir' => 'Input your backup folder'
	, 'itembackup_min_time' => 'Retention period for the recoverable items'
	, 'itembackup_min_time_info' => '<i class="fa fa-info-circle"></i> Here, you can define the minimum number of days to keep temp image data in the system directory. Put 0 to never delete temporary image containers automatically.'
	, 'directory_musst_exist_info' => '<i class="fa fa-info-circle"></i> Input an absolute path (ends with a slash), where you want to save all the backup files. Note: The directory must already exist and should be writable.'
	, 'catbackup_min_time' => 'Retention period for the recoverable categories'
	, 'fieldbackup_min_time' => 'Retention period for the recoverable fields'
	, 'catbackup_min_time_info' => '<i class="fa fa-info-circle"></i> Here, you can define the minimum number of days to keep backup of categories in the system directory. Put 0 to never delete backups automatically.'
	, 'fieldbackup_min_time_info' => '<i class="fa fa-info-circle"></i> Here, you can define the minimum number of days to keep backup of fields in the system directory. Put 0 to never delete backups automatically.'
	, 'field_settings_section' => 'Fields settings'
	, 'item_deleted' => '<div >Item "[[item]]" has been deleted.</div>'
	, 'err_unknow_itemid' => '<div >Unknown item ID.</div>'
	, 'err_item_not_exist' => '<div >Item does not exist.</div>'
	, 'err_item_delete' => '<div >Item could not be deleted</div>'
	, 'err_delete_fields_file' => '<div >Fields file could not be deleted</div>'
	, 'item_id' => 'Id'
	, 'item_enabled' => 'New items is automatically set to Enabled'
	, 'enabled' => 'Enabled'
	, 'field_details' => 'Edit field'
	, 'field-details-titel' => 'Field details'
	, 'field_id' => 'Id'
	, 'field_name' => 'Name'
	, 'field_label' => 'Label'
	, 'field_type' => 'Type'
	, 'field_info' => 'Detailed field information'
	, 'field_info_info' => '<i class="fa fa-info-circle"></i> Here, you can define detailed field info. This information will be shown in the field area at the top of the filed, as the info text you are currently reading.'
	, 'field_required' => 'Required'
	, 'input_min_length' => 'Minimum input length'
	, 'input_max_length' => 'Maximum input length'
	, 'area_css' => 'Field area CSS Class'
	, 'area_css_info' => '<i class="fa fa-info-circle"></i> Enter the CSS Class for the field area here.'
	, 'label_css' => 'Label CSS Class'
	, 'label_css_info' => '<i class="fa fa-info-circle"></i> Enter the CSS Class for the label here.'
	, 'field_css' => 'Field CSS Class'
	, 'field_css_info' => '<i class="fa fa-info-circle"></i> Enter the CSS Class for the field here.'
	, 'err_field_id' => '<div >The entered field id was not found</div>'
	, 'err_required_field' => '<div >The field "<strong>[[fieldname]]</strong>" must be filled out.</div>'
	, 'err_input_max_length' => '<div >Error field value length: The value of the "<strong>[[fieldname]]</strong>" is limited to a maximum of [[count]] characters.</div>'
	, 'err_input_min_length' => '<div >Error field value length: The value of the "<strong>[[fieldname]]</strong>" should be minimum of [[count]] characters.</div>'
	, 'err_input_incomplete' => '<div >Error value incomplete: "<strong>[[fieldname]]</strong>" all fields have to be filled out.</div>'
	, 'err_input_comparison' => '<div >Error: Values of the "<strong>[[fieldname]]</strong>" field do not match.</div>'
	, 'err_input_format' => '<div >Error: Invalid value format for the Fieldtype "<strong>[[fieldname]]</strong>".</div>'
	, 'err_delete_field' => '<div >Error: "<strong>[[fieldname]]</strong>" field could not be deleted.</div>'
	, 'add_files' => 'Add files...'
	, 'start_upload' => 'Start upload'
	, 'cancel_upload' => 'Cancel upload'
	, 'delete_upload' => 'Delete'
	, 'search_settings_section' => 'Search engine settings'
	, 'i18nsearch_engine' => 'Use I18N Search plugin'
	, 'i18nsearch_engine_info' => '<i class="fa fa-info-circle"></i> If you enable this option, the <a href="http://get-simple.info/extend/plugin/i18n-search/82/" >I18N Search plugin</a> must already be installed.'
	, 'i18nsearch_field' => 'Field name(s) for searching'
	, 'i18nsearch_field_info' => '<i class="fa fa-info-circle"></i> Enter one field name in order to make them available for searching engine. At present, only a field is accepted.'
	, 'i18nsearch_exclude_category' => 'Exclude Categories'
	, 'i18nsearch_exclude_category_info' => 'Enter one or several category ids separated with comma, to exclude from search results.'
	, 'item_created' => 'Created date'
	, 'item_updated' => 'Updated date'
	, 'i18nsearch_url' => 'Enter Item URL'
	, 'i18nsearch_segment' => 'Item slug'
	, 'i18nsearch_content' => 'Result content'
	, 'i18nsearch_content_info' => 'Field name for content to appear in the search result'
	, 'general_settings_tab_text' => '<p>The General Settings let you control how the plugin behaves across the whole application scope.</p>'
	, 'backend_settings_tab_text' => '<p>Here you can set some preferences and configuration settings for the ItemManager backend interface.</p>'
	, 'unique_itemname' => 'Unique item names'
	, 'unique_itemname_info' => '<i class="fa fa-info-circle"></i> Please check this in order for the item names to be unique.'
	, 'money_field_value' => 'Money field'
	, 'imagetitle_placeholder' => 'Title'

);
