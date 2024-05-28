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
7. Add author to blog article

<!-- Add Multiple images per Blog -->

1. create a new migration file: php artisan make:migration create_blog_images_table --create=blog_images
2. create the structure of the image table in the migratio file
3. create the table: php artisan migrate
4. In the Blog model, define a relationship to the BlogImage
5. In the BlogImage model, define a relationship to the Blog
6. In the BlogController, create a new method to store the images
7. Edit previous post to add more images
