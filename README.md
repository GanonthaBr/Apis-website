APIS SAHEL

APIS SAHEL

Project Description:

This project aims to develop a website for APIS Sahel, providing information about their services, products, and contact details. The website will be designed to be user-friendly and visually appealing, ensuring a seamless browsing experience for visitors.

Add Blog details

I - SHOW A SINGLE BLOG

1. create a route that accepts an ID
2. controller method ( show)
3. a blade file for the view
4. Blog table

II - UPLOAD A BLOG

1. create two routes: form (create) & store
2. create the controller methods
3. create the form
   ==> Route to blog upload form: /create

II - ADD AUTHENTICATION FEATURE

1. first install the UI package: composer require laravel/ui
2. create the auth scaffolding using the ui Artisan command: php artisan ui bootstrap --auth
3. make the migration
4. protect the private routes
   Route::group(['middleware'=>'auth'],function (){
   //the routes go here...
   })

5. run the command:
   npm install
   npm run dev

III - ADD COMMENT SECTION UNDER EACH BLOG POST

1. create a Comment model with:
    - comment content
    - user id
    - blog post id
2. create a migration file
3. update the blog model to add relationship with comment
4. create a controller method to store the comment
5. update the BlogController
6. update the blog view
7. update routes

Commands to Run

1-user tatble: php artisan make:migration add_is_admin_to_users_table --table=users 2. php artisasn migrate

IV - Next steps

1. Registration for new users : DONE ✅
2. Redirect issues
3. Display number of comments on the preview ✅
4. Display several images per blog✅
5. Mot du secretaire
6. Handle comments from admin dashboard ✅
7. Add author to blog article: migratation, $fillable, php artisan make:migration set_default_value_for_author_in_blogs_table --table=blogs ✅
8. Manage multiple blog images from admin dashboard ✅

<!-- Add Multiple images per Blog -->

1. create a new migration file: php artisan make:migration create_blog_images_table --create=blog_images
2. create the structure of the image table in the migratio file
3. create the table: php artisan migrate
4. In the Blog model, define a relationship to the BlogImage
5. In the BlogImage model, define a relationship to the Blog
6. In the BlogController, create a new method to store the images
7. Edit previous post to add more images

STEPS TO IMPLEMENT LANGUAGE SWITCHING
Step 1: Create Middleware
Step 2: Register Middleware
Step 3: Create a Route to Change Language
Step 4: Use Links to Change Language

SUCCESS STORY FEATURE

The feature will highlight the benefiairies speechs after receiving help from the NGO.
There will be two types of contents:

-   images and text;
-   video only
    The videos will be displayed on the landing page at bottom after the blog section and the images associated with text will be in a separated page. A link to the page would be on the navigation menu

IMPLEMENTATION
The feature will be implemented following these steps:

1. Create a new migration file to create a new table
2. Create the table
3. Create a new model for the success story: title, description, image, video, more images,
4. Create a new controller for the success story
5. Create a new view for the success story
6. Add a link to the success story page in the navigation menu
7. Add a link to the success story page in the footer
