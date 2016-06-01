Snoopy-base
==================

A boilerplate for smaller websites or webbapplications using PHP.

Built by Simon Eddeland

Usage
-------
The source code includes a sample website showcasing some of the functionality of Snoopy. Only the folder webroot should be accessible using HTTP-requests. Thus, the webroot folder includes all files visible to users of the website. The webroot folder is further structured into cache (used by the img.php-script), css for all css-files, img for images and js for all javascript files. The sample webpage includes the site controllers hello.php and helloAnother.php, which may be removed when making your own website. All other files in this folder should only be edited, not removed.

The other two folders in the root folder are src and theme. src contains all classes used in Snoopy, and theme contains files related to the rendering phase of Snoopy. Place all new classes in a file and folder with the same name as the class in the src-folder, then the class files are included automatically if needed.

Included classes
----------------
Included in Snoopy are 5 classes: CDatabase, CImage, CNavigation, CTextFilter and CUser.

**CDatabase** contains methods for connecting to a database using PDO. Some sample information for connecting to the database is included in the config file.

**CImage** is used for image processing. The preferred way of using image processing is through the img.php script (which uses CImage), not by creating your own instance of CImage.

**CNavigation** is used to create the navbar of the website, and you will probably not need to create an instance of this class.

**CTextFilter** can apply filters such as markdown to a string.

**CUser** provides an interface for checking if a user can/is logged in. Information is saved in the session variable.

Image processing
----------------
You can use img.php to present images on a web page. The images can be presented as they are, with changed width/height and can be sharpened through a filter. For a full list of the available parameters while using img.php, open the image.php file to see which get-parameters are used. To see an example of img.php in use, check the source code for hello.php.

License
------------------
This software is free software and carries a MIT license.
