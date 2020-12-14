-   [ ] Book

    1. Title  
       string
    2. Description  
       text
    3. Author  
       biginteger - Author.id
    4. Publisher  
       biginteger - Publisher.id
    5. Publication Date  
       date
    6. Publication Location
       string
    7. ISBN  
       string
    8. DOI  
       string
    9. Language  
       biginteger - Language.id
    10. Category  
        biginteger - Category.id
    11. Cover  
        string
    12. No. of pages  
        integer

-   [ ] Author

    1. Name
       string
    2. Description  
       text

-   [ ] Publisher

    1. Name
       string
    2. Description  
       text

-   [ ] Language

    1. Name
       string

-   [ ] Category

    1. Name
       string
    2. Thumbnail
       string

-   [x] Validations

# Learned

-   [x] Controller
-   [x] Migration
-   [x] Seeder
-   [x] Validation
-   [x] API Resources
-   [x] Vue JS integration
-   [x] Bootstrap integration
-   [ ] File Upload
-   [ ] Sending Emails

# Relationships

-   [x] Book hasOne Author
-   [x] Author belongsTo Book
-   [x] Book hasOne Publisher
-   [x] Publisher belongsTo Book
-   [ ] Book belongsToMany Category
-   [ ] Category belongsToMany Book
-   [ ] Book belongsToMany Language
-   [ ] Language belongsToMany Book
