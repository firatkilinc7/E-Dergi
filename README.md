# E-Dergi

Simple codeigniter based e-journal website.
<br><br>

# Screenshots
## Main Page
<img src="https://i.ibb.co/gTp3fh2/asdasdasd.png" alt="asdasdasd" border="0" />

## Admin Panel
<img src="https://i.ibb.co/N1ngpny/asdas.png" alt="asdas" border="0" />



# Helpers 
<br>

## Get Settings:

- Array containing the database settings table.
- Function takes no parameters.

### Usage:
    
    <?php $variable = get_settings(); ?>
    
<br>


## Check If User Logged In:

- It checks whether the user is logged into the system.
- Function takes no parameters.
- If the user is logged in, user information is the return value.

### Usage:
    
    <?php $variable = get_active_user(); ?>
    
<br>


## Get User Permission:

- Gets the permission value of the logged in user.
- Function takes no parameters.
- The return values are as in the table;


User Types | Anon | Author | Editor | Admin
--- | --- | --- | --- |---
Return Val | 1 | 2 | 3 | 4


### Usage:
    
    <?php $variable = get_user_permission(); ?>
    
<br>


## Get User Name:

- Returns the username of the logged in user.
- Function takes no parameters.
- The return value is the username of the logged in user.

### Usage:
    
    <?php $user_name = get_user_name(); ?>
    
<br>


## Get User Full Name:

- Returns the full name of any user.
- The function takes 1 parameter.
  - Username
- The return value is the full name corresponding to the user name given as the parameter.

### Usage:
    
    <?php $full_name = get_users_full_name($user_name); ?>
    
<br>



## Get All Users:

- Returns the all user.
- Function takes no parameters.
- The return value is an array containing all users.

### Usage:
    
    <?php $users = get_all_users(); ?>
    
<br>


## Get Pictures:

- Retrieves the images.
- Function takes 3 parameters.
  - File path of the image
  - Image name
  - Image resolution (optional)
- The return value is image.

### Usage:
    
    <?php echo get_picture("uploads/images", "logo.png", "1920x1080"); ?>
    
<br>



## String Renamer:

- Deletes Turkish characters from string.
- Function takes 1 parameters.
  - String
- The return value is a string that does not contain Turkish characters.

### Usage:
    
    <?php $converted_string = convertToSEO($string); ?>
    
<br>



## Image Uploader:

- Uploads the image to the given folder.
- Function takes 5 parameters.
  - Image
  - Target file path
  - Image width
  - Image height
  - Image name
- Return value;
  - If image uploaded successfully: TRUE
  - If image upload is fail: Error Message

### Usage:
    
    <?php upload_picture($_FILES["img_url"]["tmp_name"], "uploads/images/",1920,1080, $file_name) ?>
    
<br>



## Send E-Mail:

- It sends e-mails to addresses.
- Function takes 3 parameters.
  - Email address to be sent
  - Subject (Optional)
  - Message (Optional)
- The return value can be TRUE or FALSE depending on whether the mail was sent.

### Usage:
    
    <?php send_email("firatkilinc7@outlook.com", "E-Journal Helpers", "Hi, I love your website. How can i install it.") ?>
    
<br>


## Get All Articles:

- Returns all articlesing them from the database.
- Function takes no parameters.
- The return value is an array of articles sorted by view counts.

### Usage:
    
    <?php $articles = get_articles() ?>
    
<br>


## Send Telegram Messages:

- It sends messages via Telegram bots.
- Function takes 3 parameters.
  - Message
  - Telegram bot token
  - Telegram chat id
- There is no return value.

### Usage:
    
    <?php send_telegram_message("Hello World") ?>
    
<br>
