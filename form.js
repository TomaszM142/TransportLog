Features  Docs  Download 
 jQuery formBuilderformBuilder v3.2.5
Drag and Drop
Full-featured Form Editing

Please add new item on the below form:
Cutomer Name *
Name...
Delivery address *
Adress...
Collection Date *

rrrr-mm-dd
Collection from *?
WH2WH2
Delivery Date *

rrrr-mm-dd
Comments
Your comments...
Features
formBuilder
Create and edit form templates
39 configurable options
11 action methods
27 languages
Custom controls
XML and JSON data
formRender
Render form templates created with formBuilder
Export userData for saving or re-use in templates
5 configurable options
5 action methods
Get Started
Install
yarn add formBuilder

then add form-builder.js to your build or html
Use
<div class="build-wrap"></div>
<script>
jQuery($ => {
  $('.build-wrap').formBuilder()
})
</script>
What's New
3.2.5 (2019-06-26)
Bug Fixes
browserslist config, build:vendor (32acf6b)
Value for Value
We help you
jQuery formBuilder has an active community so if you need help, you have options.

Read the Docs
Get help on Gitter
File an issue on GitHub
Place a bounty on the required work.
Contact the maintainer
You help us
If you found value in formBuilder or a contributor helped you out of a jam, consider becoming a contributor yourself. Here are some ways you can:

S

[
  {
    "type": "header",
    "subtype": "h1",
    "label": "Please add new item on the below form:"
  },
  {
    "type": "text",
    "required": true,
    "label": "Cutomer Name",
    "placeholder": "Name...",
    "className": "form-control",
    "name": "text-1566739733741",
    "subtype": "text"
  },
  {
    "type": "text",
    "required": true,
    "label": "Delivery address",
    "placeholder": "Adress...",
    "className": "form-control",
    "name": "text-1566739813428",
    "subtype": "text"
  },
  {
    "type": "date",
    "required": true,
    "label": "Collection Date",
    "placeholder": "Date...",
    "className": "form-control",
    "name": "date-1566739957961"
  },
  {
    "type": "radio-group",
    "required": true,
    "label": "Collection from",
    "description": "WH address..",
    "inline": true,
    "name": "radio-group-1566739899952",
    "values": [
      {
        "label": "WH2",
        "value": "option-1",
        "selected": true
      },
      {
        "label": "WH2",
        "value": "option-2"
      }
    ]
  },
  {
    "type": "date",
    "required": true,
    "label": "Delivery Date",
    "placeholder": "Date...",
    "className": "form-control",
    "name": "date-1566740023347"
  },
  {
    "type": "textarea",
    "label": "Comments",
    "placeholder": "Your comments...",
    "className": "form-control",
    "name": "textarea-1566740058598",
    "subtype": "textarea"
  },
  {
    "type": "button",
    "subtype": "submit",
    "label": "Submit",
    "className": "btn-default btn",
    "name": "button-1566740129933",
    "style": "default"
  }
]