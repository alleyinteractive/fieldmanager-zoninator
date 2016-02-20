# Fieldmanager for Zoninator
Zoninator-specific extensions for Fieldmanager

[![Build Status](https://travis-ci.org/alleyinteractive/fm-zoninator.svg?branch=master)](https://travis-ci.org/alleyinteractive/fm-zoninator)

## Using Fieldmanager for Zoninator

This plugin provides an addition context for Fieldmanager allowing you to add your fields and groups to the draggable items in Zoninator's administration page, along with an AJAX-based update button to edit them in situ. To use, enable this plugin (and Fieldmanager), and do:

```
$fm = new Fieldmanager_Group( array(
	'name' => 'My Fields',
	'children' => array(
		'a' => new Fieldmanager_Textfield( 'Field A' ),
		'b' => new Fieldmanager_Textfield( 'Field B' ),
	)
) );
// Note the same signature as the ->add_meta_box() etc. methods for FM objects, except that you pass the $fm object as the final argument.
add_zoninator_post_form( 'My Fields', array( 'post' ), $fm );
```
