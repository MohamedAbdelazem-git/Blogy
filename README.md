## About Blogy

Blogy is a web application built with Laravel framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. 

## Demo
https://user-images.githubusercontent.com/64663044/218235125-1ae6dd0e-6e36-4306-8226-928341ec148b.mp4


### have some features, such as:
-   Connect your application to the database .
-   use query builder to implement the crud operations to your posts blog (Create, Show, Delete, List all).
-   All Posts is a link that redirect back to /posts route.
-   Use blade layout to not duplicate navbar across view ﬁles.
-   When submitting a form make sure to redirect back to /posts route.
-   When i Click on Delete you must show a warning before deleting and i choose between yes to conﬁrm Delete or no. .
-   create Post model and create posts table using migration files.
-   use the user model --> as the post creator (foreign key).
-   Implement the Crud Operations using the Resource Controller and Model
-   Apply the validation on the request data for both store and update method.
-   display the created at and updated at dates in well format using carbon package .
-   use the pagination in displaying the posts
-   Use php artisan ui:auth , to scaffold the auth page
-   Add Authentication middleware on all posts routes , and make anyone who isn’t authenticated to redirect back to login page.
-   Make our post have slug , using this package ( the slug will be generated from the post title , users aren’t allowed to ﬁll slug
    or send it in the request , search for $request->validated()or $request->only().
-   Upload image to post , and validate extensions are only(.jpg, .png) , and use Storage to store and show images also when updating post we remove the old image, and       when deleting we
    remove the image also.
-   create apis for your Posts application.
-   use sanctum package to authenticate the store , update apis routes.
-   apply login with github.
    Laravel is accessible, powerful, and provides tools required for large, robust applications.




